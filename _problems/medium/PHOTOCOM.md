---
category_name: medium
problem_code: PHOTOCOM
problem_name: 'Sasha and Photos'
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
problem_author: step_by_step
problem_tester: null
date_added: 8-08-2018
tags:
    - '2'
    - '2'
    - geometry
    - implementation
    - sept18
    - step_by_step
editorial_url: 'https://discuss.codechef.com/problems/PHOTOCOM'
time:
    view_start_date: 1537176602
    submit_start_date: 1537176602
    visible_start_date: 1537176602
    end_date: 1735669800
    current: 1559472979
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements \[Hindi\](http://www.codechef.com/download/translated/SEPT18/hindi/PHOTOCOM.pdf) ,\[Bengali\](http://www.codechef.com/download/translated/SEPT18/bengali/PHOTOCOM.pdf) , \[Mandarin chinese\](http://www.codechef.com/download/translated/SEPT18/mandarin/PHOTOCOM.pdf) , \[Russian\](http://www.codechef.com/download/translated/SEPT18/russian/PHOTOCOM.pdf) and \[Vietnamese\](http://www.codechef.com/download/translated/SEPT18/vietnamese/PHOTOCOM.pdf) as well. Sasha is a little girl who likes to view and compare photos. In this problem, a photo is a grid of pixels with $h$ rows and $w$ columns; each cell of this grid is either black or white. We will call the ordered pair of integers $(h, w)$ the \*shape\* of a photo. Let's define the \*similarity\* of two photos $P$ and $R$ with \*\*the same\*\* shape $(h, w)$ as the number of pairs of indices $i, j$ ($1 \\le i \\le h$, $1 \\le j \\le w$) such that $P\_{i, j} = R\_{i, j}$. Today, Sasha found two photos with possibly different shapes. She cannot directly compute the similarity of these photos; therefore, she decided to upscale both photos to get two photos with identical shapes. Formally, Sasha can choose two positive integers $a$ and $b$ and transform a photo with shape $(h, w)$ into a photo with shape $(ah, bw)$, where each pixel from the original photo is replaced by a rectangle of pixels with shape $(a, b)$ and the same color as that pixel. Since Sasha does not like huge photos, the upscaled photos should be as small as possible (specifically, if the original photos have the same shapes, they should not be changed at all). Since the resulting photos may be very big, Sasha asks you to help her and compute their similarity. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains two space-separated integers $h\_1$ and $w\_1$ denoting the shape of the first photo. - The second line contains a single string with length $h\_1 \\cdot w\_1$ describing the first photo. For each valid $i, j$, the pixel in the $i$-th row and $j$-th column of the photo is white if the $(i-1)w\_1+j$-th character of this string is '1' or black if this character is '0'. - The third line contains two space-separated integers $h\_2$ and $w\_2$ denoting the shape of the second photo. - The fourth line contains a single string describing the second photo in the same format as the first one. ### Output For each test case, print a single line containing one integer — the similarity of the upscaled photos. ### Constraints - $1 \\le T \\le 10$ - $1 \\le h\_1 \\cdot w\_1 \\le 10^6$ - $1 \\le h\_2 \\cdot w\_2 \\le 10^6$ - each string contains only characters '0' and '1' ### Subtasks \*\*Subtask #1 (10 points):\*\* - $1 \\le T \\le 20$ - $1 \\le h\_1, w\_1, h\_2, w\_2 \\le 30$ \*\*Subtask #2 (40 points):\*\* $1 \\le h\_1, w\_1, h\_2, w\_2 \\le 1,000$ \*\*Subtask #3 (50 points):\*\* original constraints ### Example Input ``` 2 1 2 01 2 1 01 2 2 0111 3 3 000000001 ``` ### Example Output ``` 2 13 ``` ### Explanation \*\*Example case 1:\*\* The initial photos are ``` 01 ``` and ``` 0 1 ``` and the upscaled photos are ``` 01 01 ``` and ``` 00 11 ``` with similarity 2, since there are two pairs of equal pixels — pixels $(0, 0)$ and pixels $(1, 1)$. \*\*Example case 2:\*\* The initial photos are ``` 0 1 1 1 ``` and ``` 0 0 0 0 0 0 0 0 1 ``` and the upscaled photos are ``` 000111 000111 000111 111111 111111 111111 ``` and ``` 000000 000000 000000 000000 000011 000011 ``` with similarity 13.
