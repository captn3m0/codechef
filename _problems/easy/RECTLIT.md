---
category_name: easy
problem_code: RECTLIT
problem_name: 'Lighting Rectangle'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 2-12-2018
tags:
    - admin2
    - bruteforce
    - easy
    - geometry
    - inclusn
    - snckel19
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/RECTLIT'
time:
    view_start_date: 1544295600
    submit_start_date: 1544295600
    visible_start_date: 1544295600
    end_date: 1735669800
    current: 1559472957
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/S19ELTST/hindi/RECTLIT.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/S19ELTST/mandarin/RECTLIT.pdf), \[Russian\](http://www.codechef.com/download/translated/S19ELTST/russian/RECTLIT.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/S19ELTST/vietnamese/RECTLIT.pdf) and \[Bengali\](http://www.codechef.com/download/translated/S19ELTST/bengali/RECTLIT.pdf) as well. You are given an axis-aligned rectangle in a 2D Cartesian plane. The bottom left corner of this rectangle has coordinates $(0, 0)$ and the top right corner has coordinates $(N-1, N-1)$. You are also given $K$ light sources; each light source is a point inside or on the perimeter of the rectangle. For each light source, let's divide the plane into four quadrants by a horizontal and a vertical line passing through this light source. The light source can only illuminate one of these quadrants (including its border, i.e. the point containing the light source and two half-lines), but the quadrants illuminated by different light sources may be different. You want to assign a quadrant to each light source in such a way that when they illuminate their respective quadrants, the entire rectangle (including its perimeter) is illuminated. Find out whether it is possible to assign quadrants to light sources in such a way. ### Input - The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows. - The first line of each test case contains two space-separated integers $K$ and $N$. - Each of the next $K$ lines contains two space-separated integers $x$ and $y$ denoting a light source with coordinates $(x, y)$. ### Output For each test case, print a single line containing the string `"yes"` if it is possible to illuminate the whole rectangle or `"no"` if it is impossible. ###Constraints - $1 \\le T \\le 5,000$ - $1 \\le K \\le 100$ - $1 \\le N \\le 10^9$ - $0 \\le x, y \\le N-1$ - no two light sources coincide ### Example Input ``` 2 2 10 0 0 1 0 2 10 1 2 1 1 ``` ### Example Output ``` yes no ```
