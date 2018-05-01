---
category_name: easy
problem_code: ADDMUL
problem_name: 'Addition and Multiplication'
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
problem_author: devuy11
problem_tester: mugurelionut
date_added: 6-05-2014
tags:
    - devuy11
    - july15
    - lazypropagation
    - medium
    - segment
editorial_url: 'http://discuss.codechef.com/problems/ADDMUL'
time:
    view_start_date: 1436779800
    submit_start_date: 1436779800
    visible_start_date: 1436779800
    end_date: 1735669800
    current: 1493558103
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/JULY15/mandarin/ADDMUL.pdf) and [Russian](/download/translated/JULY15/russian/ADDMUL.pdf).

You are given a one dimensional integer array **A** of length **N**. You need to maintain the array under **Q** queries of the following four types. Assume 1-based indexing and M = 109 + 7.

**Query 1** : 1 x y v 

 This implies adding v to array **A** to all the indices from x to y, i.e.,
``

 ```
for (i = x; i <= y; i++)	
	<b>A</b><sub>i</sub> += v;
	<b>A</b><sub>i</sub> %= M; 
<pre>**Query 2** : 2 x y v 
 This implies multiplying the scalar v with the array **A** for all the indices from x to y, i.e.,
``

 ```
for (i = x; i <= y; i++)	
        <b>A</b><sub>i</sub> *= v
        <b>A</b><sub>i</sub> %= M
</pre>**Query 3** : 3 x y v 
 This implies initializing the array **A** at all the indices from x to y with the value v, i.e.,
``

 ```
for (i = x; i <= y; i++)	
	<b>A</b><sub>i</sub> = v 
<pre>**Query 4** : 4 x y

 This is a report query which needs to find the sum of the values in **A** from x to y, i.e.,
``

 ```
sum = 0;
for (i = x; i <= y; i++)
	sum += <b>A</b><sub>i</sub>
	sum %= M
Output sum.
</pre>**Note:** a%b represents the remainder of a when divided by b.

### Input

- First line contains two space separated integers **N**, **Q**.
- Next line contains **N** space separated integers denoting the array **A**.
- Next **Q** lines contain queries which can be of any of the above four types.
 
### Output

- For each query of type 4, output a single integer corresponding to the answer in a single line.
 
### Constraints

- 1 ≤ **N** ≤ 105
- 1 ≤ **Q** ≤ 105
- 1 ≤ Initial value of **A**i ≤ 109
- 1 ≤ **v** ≤ 109
 
### Subtasks

- **Subtask 1**: Queries are of type 1, 3 and 4. **Points - 5**.
- **Subtask 2**: Queries are of type 2, 3 and 4. **Points - 5**.
- **Subtask 3**: Queries are of type 1, 2 and 4. **Points - 30**.
- **Subtask 4**: All the queries are present. **Points - 60**.
 
### Example

 ```
<b>Input:</b>
4 4
1 2 3 4
4 1 4
1 1 3 10
2 2 4 2
4 1 4

<b>Output:</b>
10
69

<pre>### Explanation

Initial **A** : \[1, 2, 3, 4\]
 Result of first query : 1 + 2 + 3 + 4 = 10
 **A** after second query: \[ 11, 12, 13, 4\]
 **A** after third query : \[ 11, 24, 26, 8\]
 Result of fourth query : 11 + 24 + 26 + 8 = 69
