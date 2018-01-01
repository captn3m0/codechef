---
category_name: school
problem_code: GDOG
problem_name: 'Greedy puppy'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: zedthirtyeight
date_added: 23-06-2015
tags:
    - ltime26
    - pavel1996
    - simple
editorial_url: 'http://discuss.codechef.com/problems/GDOG'
time:
    view_start_date: 1437900300
    submit_start_date: 1437900300
    visible_start_date: 1437900300
    end_date: 1735669800
    current: 1492507608
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME26/mandarin/GDOG.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME26/russian/GDOG.pdf).

Tuzik is a little dog. But despite the fact he is still a puppy he already knows about the pretty things that coins are. He knows that for every coin he can get very tasty bone from his master. He believes that some day he will find a treasure and have loads of bones.

And finally he found something interesting. A wooden chest containing **N** coins! But as you should remember, Tuzik is just a little dog, and so he can't open it by himself. Actually, the only thing he can really do is barking. He can use his barking to attract nearby people and seek their help. He can set the loudness of his barking very precisely, and therefore you can assume that he can choose to call any number of people, from a minimum of **1**, to a maximum of **K**.

When people come and open the chest they divide all the coins between them in such a way that everyone will get the same amount of coins and this amount is maximal possible. If some coins are not used they will leave it on the ground and Tuzik will take them after they go away. Since Tuzik is clearly not a fool, he understands that his profit depends on the number of people he will call. While Tuzik works on his barking, you have to find the maximum possible number of coins he can get.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each of next **T** lines contains 2 space-separated integers: **N** and **K**, for this test case.

### Output

For each test case output one integer - the maximum possible number of coins Tuzik can get.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N, K** ≤ **105**

### Example

<pre><b>Input:</b>
2
5 2
11 3

<b>Output:</b>
1
2

</pre>### Explanation
In the **first example** he should call two people. Each of them will take 2 coins and they will leave 1 coin for Tuzik.

In the **second example** he should call 3 people.
