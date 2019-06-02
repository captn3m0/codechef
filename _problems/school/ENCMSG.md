---
category_name: school
problem_code: ENCMSG
problem_name: 'Encoding Message'
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
problem_author: kingofnumbers
problem_tester: null
date_added: 20-07-2018
tags:
    - cook96
    - implementation
    - kingofnumbers
    - string
editorial_url: 'https://discuss.codechef.com/problems/ENCMSG'
time:
    view_start_date: 1532284205
    submit_start_date: 1532284205
    visible_start_date: 1532284205
    end_date: 1735669800
    current: 1559472926
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK96/mandarin/ENCMSG.pdf), [Russian](http://www.codechef.com/download/translated/COOK96/russian/ENCMSG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK96/vietnamese/ENCMSG.pdf) as well.

Chef recently graduated Computer Science in university, so he was looking for a job. He applied for several job offers, but he eventually settled for a software engineering job at ShareChat. Chef was very enthusiastic about his new job and the first mission assigned to him was to implement a message encoding feature to ensure the chat is private and secure. Chef has a message, which is a string $S$ with length $N$ containing only lowercase English letters. It should be encoded in two steps as follows: - Swap the first and second character of the string $S$, then swap the 3rd and 4th character, then the 5th and 6th character and so on. If the length of $S$ is odd, the last character should not be swapped with any other. - Replace each occurrence of the letter 'a' in the message obtained after the first step by the letter 'z', each occurrence of 'b' by 'y', each occurrence of 'c' by 'x', etc, and each occurrence of 'z' in the message obtained after the first step by 'a'. The string produced in the second step is the encoded message. Help Chef and find this message. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - The second line contains the message string $S$. ### Output For each test case, print a single line containing one string — the encoded message. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le N \\le 100$ - $|S| = N$ - $S$ contains only lowercase English letters ### Example Input ``` 2 9 sharechat 4 chef ``` ### Example Output ``` shizxvzsg sxuv ``` ### Explanation \*\*Example case 1:\*\* The original message is "sharechat". In the first step, we swap four pairs of letters (note that the last letter is not swapped), so it becomes "hsraceaht". In the second step, we replace the first letter ('h') by 's', the second letter ('s') by 'h', and so on, so the resulting encoded message is "shizxvzsg".
