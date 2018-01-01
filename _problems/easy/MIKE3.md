---
category_name: easy
problem_code: MIKE3
problem_name: 'Mike and Stamps'
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
problem_author: kostya_by
problem_tester: null
date_added: 26-01-2014
tags:
    - easy
    - kostya_by
    - march14
    - search
editorial_url: 'http://discuss.codechef.com/problems/MIKE3'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/MIKE3.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/MIKE3.pdf).

Mike is fond of collecting stamps. He has a lot of rare and unusual ones in his collection. Unfortunately, a few days ago he was fired from his well-paid job.

But he doesn't complain about that, he acts! That's why Mike picked up **N** stamps from his collection and is going to sell them. He has already placed an announcement on the Internet and got **M** offers. Each offer can be described as a set of stamps, that the buyer wants to buy. Now Mike needs your help to choose a set of offers, that he should accept.

He can't accept offers partially. Also, as far as Mike has the only copy of each stamp, he can sell one stamp to at most one buyer.

Of course, Mike wants to maximize the number of accepted offers. Help him!

### Input

The first line contains two integer **N** and **M**, denoting the number of the stamps and the number of the offers.

The next **M** lines contain the descriptions of the offers. The **(i+1)**'th line of the input contains the description of the **i**'th offer and corresponds to the following pattern: **Ki** **Ai, 1** **Ai, 2**, ..., **Ai, Ki**. **Ki** - is the number of the stamps, which the **i**'th buyer wants to buy, **Ai** - is the list of the stamps sorted in the ascending order.

### Output

Output should contain the only integer, denoting the maximal number of the offers, that Mike can accept.

### Constraints

1 ≤ **N** ≤ 20,000

1 ≤ **M** ≤ 20

1 ≤ **Ki**

### Example

<pre><b>Input:</b>
4 3
2 1 2
2 2 3
2 3 4

<b>Output:</b>
2

</pre>### Explanation
In the example test Mike should accept the first and the third offer.
