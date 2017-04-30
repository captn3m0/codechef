---
languages_supported:
    - NA
title: PRIMPATT
category: NA
old_version: true
problem_code: PRIMPATT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

**The problem statement (Input Para) has been updated at 11:00 pm Indian Standard Time on 1st June, 2010.**

![](https://www.spoj.pl/content/spookycookie:spiral)

There is a very large field, colored white and divided into squares. There is a coordinate system attached to the field: y-axis goes from south to north and x-axis goes from west to east. Sides of the squares are parallel to the axes. There is a robot in the (0, 0) square. Robot starts to move in spiral as depicted. First it moves one step east and one step north. Then two steps west and two steps south. Then three steps east and three steps north, four steps west and four steps south and so on. It moves to a new square with each step. As it moves it counts squares it passes and, if the number of the square is the prime number, then the robot fills this square with black color. The (0, 0) square has the number 0. Given the coordinates of a square you are to calculate the distance from this square to the nearest to it black square. For two squares with coordinates (x1, y1) and (x2, y2) the distance between those squares is |x1-x2|+|y1-y2|.



### Input

Input file consists of a set of tests. The first line of the file is number T – the number of tests (T <= 500). Following T lines contains two integers each separated with a space: x and y – the coordinates of the square (-2000001 < x < 2000001, -2000001 < y < 2000001).

### Output

For each coordinate pair in the input file you are to output the distance between this square and the nearest to it black square.

### Example

`<b>Input:</b><br></br>8<br></br>0 0<br></br>1 0<br></br>1 1<br></br>0 1<br></br>3 3<br></br>-3 -3<br></br>-1 2<br></br>0 -3<br></br><br></br><b>Output:</b><br></br>1<br></br>1<br></br>0<br></br>0<br></br>1<br></br>1<br></br>2<br></br>2<br></br><br></br>`