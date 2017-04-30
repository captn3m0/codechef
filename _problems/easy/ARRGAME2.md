---
category_name: easy
problem_code: ARRGAME2
problem_name: 'Yet Another Nice Girl'
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: ballon_ziq
problem_tester: shangjingbo
date_added: 2-08-2013
tags:
    - ballon_ziq
    - easy
    - oct13
    - probability
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/ARRGAME2'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493558108
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/ARRGAME2.pdf)

### Problem Statement

Little Chef doesn't love math anymore. He loves Aleksandra.

 Sashen'ka is nice. They spend all the time together. Even their birthdays they are celebrating together, because they were born on the same day :)

And now, this day is coming...

Chef know that most of all Sasha loves numbers, that's why he bought **N** positive numbers to a girl. From her side, Sasha as all girls, thought that if she likes something, then all people like that too. And bought to a boy **N** numbers too. xD After all greeting young people decide to play a game with their gifts. The game will be continued for **N** turns, in each turn the following will be done:

8. Chef randomly choose some number **x** from his gift.
9. Sasha randomly choose some number **y** form her gift.
10. If **xy > yx** then girl will kiss fellow.
11. Numbers **x,y** will be discarded from gifts.
Now chef is wondering what is the expected number of times he will be kissed by Sasha ? ### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of numbers in each gift. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the numbers Sasha gave to Chef. Next line describe **B1**, **B2**, ..., **BN** numbers boy gave to girl in the same way.

### Output

For each test case, output a single line containing answer for corresponding test. Your answer will be considered as correct if it will have absolute error not more then **10-6**. ### Constraints

21. **1** ≤ **T** ≤ **5**
22. **1** ≤ **N** ≤ **105**
23. **1** ≤ **Ai** ≤ **109**
24. **1** ≤ **Bi** ≤ **109**
### Example

```

<b>Input</b>
3
1
3
4
2
2 3
1 4
2
2 4
2 2

<b>Output:</b>
1.000000
1.500000
0.000000



```
### Explanation

**Example case 1.** Game will have only 1 turn. Chef will choose 3, while Sasha will choose 4. Since 34>43 girl will kiss boy. Hence answer is 1.