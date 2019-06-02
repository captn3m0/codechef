---
category_name: easy
problem_code: XYPIZQ
problem_name: 'A Pizza Slice'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: include_sajal
problem_tester: null
date_added: 2-01-2019
tags:
    - cases
    - easy
    - include_sajal
    - jan19
    - maths
    - taran_1407
    - triangle
editorial_url: 'https://discuss.codechef.com/problems/XYPIZQ'
time:
    view_start_date: 1547458202
    submit_start_date: 1547458202
    visible_start_date: 1547458202
    end_date: 1735669800
    current: 1559472963
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/JAN19/hindi/XYPIZQ.pdf), \[Bengali\](http://www.codechef.com/download/translated/JAN19/bengali/XYPIZQ.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/JAN19/mandarin/XYPIZQ.pdf), \[Russian\](http://www.codechef.com/download/translated/JAN19/russian/XYPIZQ.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/JAN19/vietnamese/XYPIZQ.pdf) as well. ChefX showed ChefY his new pizza slice design. The design is a planar figure that can be drawn in the following way: - Draw a point $\\mathsf{A}\_0$ and two rays from this point such that the angle between them is $\\alpha \\lt \\pi/2$. - Mark $N$ points $\\mathsf{A}\_1, \\mathsf{A}\_2, \\mathsf{A}\_3, \\ldots, \\mathsf{A}\_N$ on one ray in this order ($\\mathsf{A}\_1$ is closest to $\\mathsf{A}\_0$). - Mark $N$ points $\\mathsf{B}\_1, \\mathsf{B}\_2, \\mathsf{B}\_3, \\ldots, \\mathsf{B}\_N$ on the other ray in this order ($\\mathsf{B}\_1$ is closest to $\\mathsf{A}\_0$). - For each valid $i$, draw a line segment between points $\\mathsf{A}\_i$ and $\\mathsf{B}\_{i+1}$. - For each valid $i$, draw a line segment between points $\\mathsf{B}\_i$ and $\\mathsf{A}\_{i+1}$. - Finally, draw a line segment between points $\\mathsf{A}\_N$ and $\\mathsf{B}\_N$. - All these $2N-1$ line segments must have equal lengths, which must also be equal to $|\\mathsf{A}\_0\\mathsf{A}\_1| = |\\mathsf{A}\_0\\mathsf{B}\_1|$. The result should look roughly like this: !\[\](https://codechef\_shared.s3.amazonaws.com/download/Images/JAN19TST/XYPIZQ/XYPIZQ.PNG) ChefY wants to show ChefX that he does not know his own design very well. He asks ChefX to compute the angle between three of the marked points in this figure. It is clear that there are only four types of angles: 1. $\\angle \\mathsf{A}\_x\\mathsf{A}\_y\\mathsf{B}\_z$ 2. $\\angle \\mathsf{A}\_x\\mathsf{B}\_y\\mathsf{A}\_z$ 3. $\\angle \\mathsf{A}\_x\\mathsf{B}\_y\\mathsf{B}\_z$ 4. $\\angle \\mathsf{B}\_x\\mathsf{A}\_y\\mathsf{B}\_z$ Can you help ChefX find the angle ChefY asks for? It can be proved that under the given constraints, each angle can be written as $\\pi \\cdot m / n$, where $m$ and $n$ are coprime integers; you should find $m$ and $n$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains five space-separated integers $N$, $t$, $x$, $y$ and $z$. Here, $t$ denotes the type of the angle as listed above. ### Output For each query, print a single line containing two space-separated integers $m$ and $n$. ### Constraints - $1 \\le T \\le 10^5$ - $2 \\le N \\le 10^9$ - $1 \\le t \\le 4$ - each angle is between three of the points $A\_0, A\_1, \\ldots, A\_N, B\_1, \\ldots, B\_N$ - $|x-y| = 1$ - $|y-z| = 1$ - each angle is non-zero ### Subtasks \*\*Subtask #1 (10 points):\*\* $1 \\le T \\le 10$ \*\*Subtask #2 (90 points):\*\* original constraints ### Example Input ``` 1 175456798 1 151163203 151163204 151163205 ``` ### Example Output ``` 66583464 116971199 ``` ### Explanation \*\*Example case 1:\*\* The type is $1$, so the angle we want is $\\mathsf{A}\_{151163203}\\mathsf{A}\_{151163204}\\mathsf{B}\_{151163205}$. The angle is $(66583464/116971199) \\pi \\doteq \\mathrm{1.7883}$.
