---
category_name: easy
problem_code: YVNUM
problem_name: 'Yalalovichik Numbers'
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
problem_author: deadwing97
problem_tester: null
date_added: 19-12-2018
tags:
    - cook101
    - deadwing97
editorial_url: 'https://discuss.codechef.com/problems/YVNUM'
time:
    view_start_date: 1545589802
    submit_start_date: 1545589802
    visible_start_date: 1545589802
    end_date: 1735669800
    current: 1559472964
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK101TST/hindi/YVNUM.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK101TST/mandarin/YVNUM.pdf), \[Russian\](http://www.codechef.com/download/translated/CK101TST/russian/YVNUM.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK101TST/vietnamese/YVNUM.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK101TST/bengali/YVNUM.pdf) as well. The Petrozavodsk camp takes place in about one month. Jafar wants to participate in the camp, but guess what? His coach is Yalalovichik. Yalalovichik is a legendary coach, famous in the history of competitive programming. However, he is only willing to send to the camp students who solve really hard problems on Timus. The deadline that Yalalovichik set before has passed and he refuses to send Jafar to the camp. Jafar decided to make Yalalovichik happy in hopes of changing his decision, so he invented a new sequence of numbers and named them Yalalovichik numbers. Jafar is writing a research paper about their properties and wants to publish it in the Science Eagle yearly journal. A Yalalovichik number is created in the following way: - Consider an integer $N$ in decimal notation; let's call it the \*base\* of the Yalalovichik number $Y\_N$. $N$ may not contain the digit $0$. - Treat $N$ as a decimal string. Compute all left shifts of this string $N\_0, N\_1, \\ldots, N\_{|N|-1}$ ($|N|$ denotes the number of digits of $N$); specifically, $N\_k$ denotes the string formed by moving the first $k$ digits of $N$ to the end in the same order. - Concatenate the strings $N\_0, N\_1, \\ldots, N\_{|N|-1}$. The resulting string is the decimal notation of $Y\_N$. For example, if $N = 123$, the left shifts are $123, 231, 312$ and thus $Y\_N = 123231312$. You are given the base $N$. Calculate the value of $Y\_N$ modulo $10^9+7$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single decimal integer $N$. ### Output For each test case, print a single line containing one integer — the value of the Yalalovichik number $Y\_N$ modulo $10^9+7$. ### Constraints - $1 \\le T \\le 200$ - $|N| \\le 10^5$ - $N$ does not contain the digit $0$ - the sum of $|N|$ over all test cases does not exceed $10^6$ ### Example Input ``` 1 123 ``` ### Example Output ``` 123231312 ```
