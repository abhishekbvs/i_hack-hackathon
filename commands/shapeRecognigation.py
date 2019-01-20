import cv2
import math
import numpy as np
import sys

s=sys.argv[1]
img = cv2.imread(s, cv2.IMREAD_GRAYSCALE)
_, threshold = cv2.threshold(img, 240, 255, cv2.THRESH_BINARY)
contours,_ = cv2.findContours(threshold, cv2.RETR_TREE, cv2.CHAIN_APPROX_SIMPLE)

font = cv2.FONT_HERSHEY_COMPLEX
arr =[]
for cnt in contours:
    approx = cv2.approxPolyDP(cnt, 0.01*cv2.arcLength(cnt, True), True)
    cv2.drawContours(img, [approx], 0, (0), 5)
    x = approx.ravel()[0]
    y = approx.ravel()[1]

    if len(approx) == 3:
        cv2.putText(img, "Triangle", (x, y), font, 1, (0))
        print("this is Triangle")
        print(approx)
    elif len(approx) == 4:
        cv2.putText(img, "Rectangle", (x, y), font, 1, (0))
        print('this is Rectangle')
        for i in approx:
            arr.append(i)
        x1=arr[0][0]
        y1=arr[1][0]
        z1=arr[2][0]
        dis= math.sqrt((y1[0] - z1[0])**2 + (y1[1] - z1[1])**2)
        dist = math.sqrt((y1[0] - x1[0])**2 + (y1[1] - x1[1])**2)
        if dist == dis :
            print("Square")
        else :
            print("Rectangle")
        print(approx)
    elif len(approx) == 5:
        cv2.putText(img, "Pentagon", (x, y), font, 1, (0))
        print(approx)
    elif 6 < len(approx) < 15:
        cv2.putText(img, "Ellipse", (x, y), font, 1, (0))
    else:
        cv2.putText(img, "Circle", (x, y), font, 1, (0))

cv2.imshow("shapes", img)
cv2.imshow("Threshold", threshold)
cv2.waitKey(0)
cv2.destroyAllWindows()
