---
category_name: medium
problem_code: CRISIS
problem_name: 'CPI Crisis'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
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
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kr_abhinav
problem_tester: null
date_added: 1-04-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525454398
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Naruto has recently joined the Ninja Academy for higher education, while filling the admission form he is required to choose minimum $X$ subjects out of a list of $N$ subjects. He is not very interested in studies but wants to get a good overall CPI. However, every subject has a different weightage/credit. The credit (denoted as $C$i) of a particular course is equal to the position in which it appears in the subject list, i.e, the first course has a credit=1, the second course has a credit=2, and so on. Naruto knows his capabilities, and so he has come up with the scores ($S$i) he can achieve in every course. He wants to maximise his CPI, which can be calculated as the weighted mean of all the subjects taken, denoted as \_\_Sum(Ci\*Si)/Sum(Ci)\_\_ for all i s.t Naruto has taken up course i ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - First line of every test case contains two integers, $N$ and $X$ - Next line of the test case contains $N$ space separated integers Si, denoting the score he can get in every subject ###Output: For each testcase, output in a single line the maximum cpi he can get after choosing the subjects. Your output will be considered correct if it has an absolute error of less than 10-6. ###Constraints - $1 \\leq T \\leq 10$ - $1 \\leq N \\leq 1000$ - $1 \\leq X \\leq N$ - $1 \\leq S$i$ \\leq 10000$ ###Sample Input: 1 5 2 50 40 30 20 10 ###Sample Output: 43.3333333333 ###Explanation: He can achieve the max credit by picking the first two subjects, which produces a CPI of (50 \* 1+40 \* 2)/(1+2) = 43.333333333
