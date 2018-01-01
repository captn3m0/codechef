---
category_name: medium
problem_code: RRFRNDS
problem_name: Friends
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: Rubanenko
problem_tester: shiplu
date_added: 15-07-2014
tags:
    - Rubanenko
    - cook48
    - graph
    - medium
editorial_url: 'http://discuss.codechef.com/problems/RRFRNDS'
time:
    view_start_date: 1405884600
    submit_start_date: 1405884600
    visible_start_date: 1405884600
    end_date: 1735669800
    current: 1493557884
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK48/mandarin2/RRFRNDS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK48/russian/RRFRNDS.pdf) as well.

After IOI Ilya decided to make a business. He found a social network called "TheScorpyBook.com". It currently has **N** registered users. As in any social network two users can be friends. Ilya wants the world to be as connected as possible, so he wants to suggest friendship to some pairs of users. He will suggest user **u** to have a friendship with user **v** if they are not friends yet and there is a user **w** who is friends of both of them. Note that **u**, **v** and **w** are different users. Ilya is too busy with IPO these days, so he asks you to count how many friendship suggestions he has to send over his social network.

### Input

The first line contains an integer number **N** — the number of users in the network. Next **N** lines contain **N** characters each denoting friendship relations. **jth** character if the **ith** lines equals one, if users **i** and **j** are friends and equals to zero otherwise. This relation is symmetric, i.e. if user **a** is friend of **b** then **b** is also a friend of **a**.

### Output

Output a single integer — number of friendship suggestions Ilya has to send.

### Constraints

- **1** ≤ **N** ≤ **2000**

### Example

<pre><b>Input:</b>
4
0111
1000
1000
1000

<b>Output:</b>
6

</pre>### Explanation
Each of users **\[2, 3, 4\]** should receive two friendship suggestions, while user **1** does not need any, since he already has all other users in his friend-list.
