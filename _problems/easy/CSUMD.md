---
category_name: easy
problem_code: CSUMD
problem_name: 'My Fair Coins'
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
max_timelimit: '0.314214'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: laycurse
date_added: 5-05-2012
tags:
    - easy
    - july12
    - kaushik_iska
    - matrix
    - recurrence
editorial_url: 'http://discuss.codechef.com/problems/CSUMD'
time:
    view_start_date: 1342000262
    submit_start_date: 1342000262
    visible_start_date: 1341999849
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available. There are coins of 2 different denominations in Crazyland, 1-cent coins and 2-cent coins. As all the coins do, even these coins have two faces, i.e. heads and tails. Your task is to find out the the number of ways to create a linear arrangement of these coins so that their sum is **N** cents. The only condition on the linear arrangement is that the first coin in the arrangement should always face heads. All other coins could either face head or face tail.

 Take **N = 2** as an example. The possible arrangements are **(1H, 1H), (2H), (1H, 1T),** where **H** is heads and **T** is tails. Therefore there are **3** possible arrangements that sum up to 2-cents.

 **Note**

 While counting make sure that you count heads and tails as different.

 **Input**

 First line contains **T**, the number of cases.

 **T** lines follow, each containing a single number **N**, the required sum.

 **Constraints**

 0 &lt;= **T** &lt;= 10000

 1 &lt;= **N** &lt;= 1000000000

 **Output**

For each case the output should be a single integer representing the number of such arrangements possible. As this can be very large print it modulo **1000000007**.

**Sample Input**

<pre>
3
1
2
3
</pre>

**Sample Output**
<pre>
1
3
8
</pre>