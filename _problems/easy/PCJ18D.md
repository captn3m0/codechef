---
category_name: easy
problem_code: PCJ18D
problem_name: 'Chef and Cookies'
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
problem_author: madhav_1999
problem_tester: null
date_added: 28-07-2018
tags:
    - madhav_1999
    - madhav_1999
    - pcj
    - prakhar17252
    - proconjunior
    - tanmay28
editorial_url: 'https://discuss.codechef.com/problems/PCJ18D'
time:
    view_start_date: 1534176000
    submit_start_date: 1534176000
    visible_start_date: 1534176000
    end_date: 1735669800
    current: 1559472953
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef is baking delicious cookies today! Since Chef is super hungry, he wants to eat at least $N$ cookies. Since Chef is a messy eater, he drops a lot of crumbs. Crumbs of $B$ cookies can be put together to make a new cookie! Given $N$ and $B$, help Chef find out the minimum number of cookies he must initially bake, $A$, to satisfy his hunger. ###Input: - First line will contain $T$, number of testcases. Then the testcases follow. - Each testcase contains of two space separated integers $N, B$. ###Output: For each test case, print a single integer $A$, the minimum number of cookies Chef must bake initially. ###Constraints - $1 \\leq T \\leq 1000$ - $1 \\leq N \\leq 1000000000$ - $2 \\leq B \\leq 1000000000$ ###Sample Input 1: 1 3 2 ###Sample Output 1: 2 ###Sample Input 2: 1 11 2 ###Sample Output 2: 6 ###Explanation 2: Chef initially make 6 cookies. From the crumbs, Chef makes 3 new cookies with no crumbs left over. From the crumbs of the new cookies, Chef makes 1 new cookie and have crumbs left from one cookie. From the new cookie, Chef gets more crumbs. He adds the crumbs and gets one last cookie. After eating that, there are not enough crumbs left to make a new cookie. So a total of 11 cookies are consumed!
