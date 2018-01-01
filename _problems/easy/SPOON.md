---
category_name: easy
problem_code: SPOON
problem_name: 'Spoon in Matrix'
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
problem_author: yellow_agony
problem_tester: anton_lunyov
date_added: 18-01-2012
tags:
    - easy
    - march12
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/SPOON'
time:
    view_start_date: 1331460077
    submit_start_date: 1331460077
    visible_start_date: 1331458200
    end_date: 1735669800
    current: 1493558188
layout: problem
---
All submissions for this problem are available.Chef recently saw the movie Matrix. He loved the movie overall but he didn't agree with some things in it. Particularly he didn't agree with the bald boy when he declared - [There is no spoon](http://youtu.be/dzm8kTIj_0M). Being a chef, he understands the importance of the spoon and realizes that the universe can't survive without it. Furthermore, he is sure there is a spoon; he saw it in his kitchen this morning. So he has set out to prove the bald boy is wrong and find a spoon in the matrix. He has even obtained a digital map already. Can you help him? Formally you're given a matrix of lowercase and uppercase Latin letters. Your job is to find out if the word "Spoon" occurs somewhere in the matrix or not. A word is said to be occurred in the matrix if it is presented in some row from left to right or in some column from top to bottom. Note that match performed has to be case insensitive.

### Input

The first line of input contains a positive integer **T**, the number of test cases. After that **T** test cases follow. The first line of each test case contains two space separated integers **R** and **C**, the number of rows and the number of columns of the matrix **M** respectively. Thereafter **R** lines follow each containing **C** characters, the actual digital map itself.

### Output

For each test case print one line. If a "Spoon" is found in Matrix, output "There is a spoon!" else output "There is indeed no spoon!" (Quotes only for clarity).

### Constraints

1 ≤ **T** ≤ 100

1 ≤ **R, C** ≤ 100

### Sample Input

<pre>
3
3 6
abDefb
bSpoon
NIKHil
6 6
aaaaaa
ssssss
xuisdP
oooooo
ioowoo
bdylan
6 5
bdfhj
cacac
opqrs
ddddd
india
yucky

</pre>### Sample Output
<pre>
There is a spoon!
There is a spoon!
There is indeed no spoon!

</pre>### Explanation
In the first test case, "Spoon" occurs in the second row. In the second test case, "spOon" occurs in the last column.
