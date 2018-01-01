---
category_name: easy
problem_code: FROGV
problem_name: 'Chef and Frogs'
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
problem_author: berezin
problem_tester: null
date_added: 10-03-2014
tags:
    - berezin
    - dynamic
    - july14
    - simple
editorial_url: 'http://discuss.codechef.com/problems/FROGV'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1493558147
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY14/mandarin/FROGV.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/FROGV.pdf).

Nobody knows, but **N** frogs live in Chef's garden.

Now they are siting on the X-axis and want to speak to each other. One frog can send a message to another one if the distance between them is less or equal to **K**.

Chef knows all **P** pairs of frogs, which want to send messages. Help him to define can they or not!

**Note** : More than 1 frog can be on the same point on the X-axis.

### Input

- The first line contains three integers **N**, **K** and **P**.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the x-coordinates of frogs".
- Each of the next **P** lines contains two integers **A** and **B** denoting the numbers of frogs according to the input.

### Output

- For each pair print "Yes" without a brackets if frogs can speak and "No" if they cannot.

### Constraints

- **1** ≤ **N, P** ≤ **10^5**
- ≤ **Ai, K** ≤ **10^9**
- **1** ≤ **A, B** ≤ **N**

### Example

<pre><b>Input:</b>
5 3 3
0 3 8 5 12
1 2
1 3
2 5

<b>Output:</b>
Yes
Yes
No


</pre><pre>
<h3>Explanation</h3>
<p>For pair <b>(1, 2)</b> frog <b>1</b> can directly speak to the frog <b>2</b> as the distance between them is <b>3 - 0 = 3 <= K </b>. </p>
<p>For pair <b>(1, 3)</b> frog <b>1</b> can send a message to frog <b>2</b>, frog <b>2</b> can send it to frog <b>4</b> and it can send it to frog <b>3</b>.
</p><p>For pair <b>(2, 5)</b> frogs can't send a message under current constraints. </p>

</pre>