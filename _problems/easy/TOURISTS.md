---
category_name: easy
problem_code: TOURISTS
problem_name: 'Tourists in Mancunia'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: satyaki3794
problem_tester: null
date_added: 4-01-2017
tags:
    - easy
    - eulerian
    - graph
    - jan17
    - satyaki3794
editorial_url: 'https://discuss.codechef.com/problems/TOURISTS'
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1493558193
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/TOURISTS.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/TOURISTS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/TOURISTS.pdf) as well.

The grand kingdom of Mancunia is famous for its tourist attractions and visitors flock to it throughout the year. King Mancunian is the benevolent ruler of the prosperous country whose main source of revenue is, of course, tourism.

The country can be represented by a network of **unidirectional** roads between the cities. But Mancunian, our benign monarch, has a headache. The road network of the country is not **tourist-friendly** and this is affecting revenue. To increase the GDP of the nation, he wants to redirect some of the roads to make the road network **tourist-friendly** and hence, ensure happiness and prosperity for his loyal subjects.

Now is the time for some formal definitions. :(

A road network is said to be **tourist-friendly** if for every city in the country, if a tourist starts his journey there, there is a path she can take to visit each and every city of the nation and traverse each road **exactly once** before ending up at the city where she started.

Given a description of the road network of Mancunia, can you come up with a scheme to redirect some (possibly none) of the roads to make it **tourist-friendly**?

### Input

The first line contains two integers **N** and **E** denoting the number of cities and roads in the beautiful country of Mancunia respectively.

Each of the next **E** lines contains two integers **a** and **b** implying that there is a unidirectional road from city **a** to city **b**.

It is guaranteed that there aren't multiple roads in the exact same direction and that there is no road from a city to itself.

### Output

If there is no solution, print "NO" (without quotes). Else, print "YES" (without quotes), followed by exactly **E** lines.

The **ith** line of output should represent the **ith** road in the input. It should have two integers **a** and **b** denoting that the final orientation of that road is from **a** to **b**.

### Constraints

- **1** ≤ **N** ≤ **100000**
- **1** ≤ **E** ≤ **200000**
- **1** ≤ **a, b** ≤ **N**

**Subtask 1: (20 points)**

- **1** ≤ **N** ≤ **20**
- **1** ≤ **E** ≤ **21**

**Subtask 2: (80 points)**

- **Same as original constraints**

### Example 1

<pre><b>Input:</b>
3 3
1 2
2 3
3 1

<b>Output:</b>
YES
1 2
2 3
3 1
</pre>### Example 2

<pre><b>Input:</b>
3 2
1 2
2 3

<b>Output:</b>
NO
</pre>### Example 3

<pre><b>Input:</b>
5 6
1 2
2 3
3 4
2 4
2 5
1 5

<b>Output:</b>
YES
1 2
2 3
3 4
4 2
2 5
5 1
</pre>