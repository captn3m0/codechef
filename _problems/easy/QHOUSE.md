---
category_name: easy
problem_code: QHOUSE
problem_name: 'Bear and House Queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: errichto
date_added: 20-02-2017
tags:
    - binary
    - easy
    - errichto
    - ltime45
editorial_url: 'https://discuss.codechef.com/problems/QHOUSE'
time:
    view_start_date: 1488042300
    submit_start_date: 1488042300
    visible_start_date: 1488042300
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME45/mandarin/QHOUSE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME45/russian/QHOUSE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME45/vietnamese/QHOUSE.pdf) as well.

This is an interactive problem. It means that every time you output something, you must finish with a newline character and flush the output. For example, in C++ use the fflush(stdout) function, in Java — call System.out.flush(), in Python — sys.stdout.flush(), and in Pascal — flush(output). Only after flushing the output will you be able to read from the input again.

Limak is a little bear. He has made a drawing of his house for you! To get it, you must first play a game with him (little bears love playing games).

The drawing shows a building with a roof on the top. The building is represented by a square and the roof by an isosceles triangle in the coordinate system. Formally, the following conditions are guaranteed:

- Both the square and the triangle are non-degenerate, i.e their areas are positive, and not zero.
- The bottom side of the triangle is its base.
- The bottom side of the square lies on the x-axis, while the top side is a part of the base of the triangle.
- The base of the triangle is longer that the side of the square.
- The whole drawing is symmetric with respect to the y-axis.
- All vertices of the square and the triangle have integer coordinates, and their absolute values do not exceed 1000. All y-coordinates are non-negative.

An example of a valid drawing:

![](https://www.codechef.com/download/upload/LTIME45/1YdgYQi.png)Your task is to find the total area of the house (the sum of areas of the square and the triangle). To achieve that, you are allowed to ask at most 100 queries. In each query you choose some point with integer coordinates and the system will tell you if this point is in the house (including its boundary).

### Interaction

At most 100 times, you can ask a query by printing "? x y" (without the quotes) in a singe line. Coordinates x and y should be integers such that -1000 ≤ x ≤ 1000 and 0 ≤ y ≤ 1000. After flushing the output you should read a response that is a string "YES" or "NO" (without the quotes) in a single line. A response "YES" means that the point (x, y) is inside the house or on its boundary, while "NO" means that it's outside.

Finally you should print the answer in the form "! S" (without the quotes) where S is an integer denoting the area of the house (it can be proved that it must be integer). Then terminate your program.

### Notes

- For each test the house is fixed and it doesn't change during queries. It's even allowed to guess the area and print the answer as "! S" without asking any queries. But obviously asking queries first might be useful.
- After submitting your program you will see which tests it passes. The first test there ("task # 0") matches the example test and drawings from this statement.
- Asking more than 100 queries or printing invalid coordinates (not from allowed range) results in the verdict WA (wrong answer).
- Printing the answer doesn't count as asking a query. In particular, you can ask exactly 100 queries and print the answer after that .
- You can't ask more queries after printing the answer.
- You can ask the same query more than once.

### Subtasks

- Subtask #1 (35 points) The absolute values of the coordinates of vertices don't exceed 10.
- Subtask #2 (65 points) Original constraints (absolute values of coordinates can be up to 1000)

### Example

you system? 1 0   YES? 2 2   YES? -3 0   NO? -1 3  YES? -1 4  YES? 7 4  NO? -3 6  NO? 2 6  YES! 34 ### Explanation

The example test matches the drawing from the statement. The square has side 4, while the triangle has base 12 and height 3. The answer is 4 \* 4 + 12 \* 3 / 2 = 16 + 18 = 34.

Above you can see an example of communication with the system. For example, the first query asks about the point (1, 0). It is on the boundary so the response is "YES". On the drawing below, blue and red points denote queries with response "YES" and "NO" respectively.

![](https://s3.amazonaws.com/codechef_shared/download/upload/LTIME45/QoJ5ejY.png)
