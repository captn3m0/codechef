---
category_name: medium
problem_code: LOTERY
problem_name: 'LCM equation'
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
max_timelimit: '1 - 4'
source_sizelimit: '50000'
problem_author: kaizer
problem_tester: null
date_added: 5-09-2015
tags:
    - kaizer
    - lcm
    - medium
    - oct15
    - segment
editorial_url: 'http://discuss.codechef.com/problems/LOTERY'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493557755
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/LOTERY.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/LOTERY.pdf) 

Chef is exploring a new mathematical problem, which can be stated as follows:

![](http://mathurl.com/ok7rd4a.png)

![](http://mathurl.com/nz4fycw.png)

where **\[x\]** means greatest integer which doesn't exceed **x**.

Chef wants you to answer some questions for a given pair of integers **N**, **K**:
What is the [**least common multiple**](https://en.wikipedia.org/wiki/Least_common_multiple) of **F(N, 1)**, **F(N, 2)**, ... , **F(N, K)** modulo **109 + 7**.

Chef is not willing to give you all queries at once. Instead, he gives you the first query and suggests you generate all the following queries in this way:

**Ni = 1 + (A \* Answeri-1 + Ci) mod M** ,
**Ki = 1 + (B \* Answeri-1 + Di) mod Ni**, 
where **Answeri** is the answer for the **i**th query.

### Input

The first line of input contains an integer **T** denoting the number of questions Chef wants to ask you. 
Second line contains two space-separated integers **N1, K1**.
Third line contains three space-separated integers **A**, **B**, and **M**, described in the statement.
Next line contains **T-1** space-separated integers: **C2**, **C3**, ... , **CT**
Next line contains **T-1** space-separated integers: **D2**, **D3**, ... , **DT**

### Output

For each test case, output a single integer — the answer for the given query.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **106**
- ≤ **A**, **B**, **Ci**, **Di** < **M** ≤ **105**
- **1** ≤ **K1** ≤ **N1**< **M**

**Subtask1:(10 points)**

- **1** ≤ **M** ≤ **10**
- Time Limit is **1** second

**Subtask2: (20 points)**

- **1** ≤ **T** ≤ **102**
- **1** ≤ **M** ≤ **103**
- Time Limit is **1** second

**Subtask3: (30 points)**

- **A = B = 0**
- Time Limit is **4** seconds

**Subtask4: (40 points)**

- No additional constraints
- Time Limit is **4** seconds

### Example

<pre><b>Input:</b>
<tt>3
2 1
0 0 3
2 2
0 1</tt>
<b>Output:</b>
<tt>2
3
6</tt>

</pre><pre><b>Input:</b>
<tt>4
5 2
2 3 6
4 2 3
2 4 2</tt>
<b>Output:</b>
<tt>20
6
6
4</tt>

<h3>Explanation</h3>
<p><b>Example case 1.</b> 
<b>F(2,1) = F(2,2) = 2,  F(3,1) = 3, F(3,2) = 6, F(3,3) = 3</b>
<b>1st query</b> - (2,1). <b>Answer</b> = 2.
<b>2nd query</b> - (3,1). <b>Answer</b> = 3
<b>3rd query</b> - (3,2). <b>Answer</b> = 6
</p>

<p><b>Example case 2.</b> 
<b>F(4,1) = 4, F(5,2) = 20</b>
<b>1st query</b> - (5,2). 
      <b>Answer</b> = lcm(F(5,1), F(5,2)) = lcm(5,20) = 20
<b>2nd query</b> - (1 + (20 * 2 + 4) mod 6, 1 + (20 * 3 + 2) mod n) = (3, 3). 
      <b>Answer</b> = lcm(F(3,1), F(3,2), F(3,3)) = lcm(3,6,3) = 6
<b>3rd query</b> - (1 + (6*2 + 2) mod 6, 1 + (6*3 + 4) mod n) = (3,2). 
      <b>Answer</b> = lcm(F(3,1), F(3,2)) = 6
<b>4th query</b> - (1 + (6*2 + 3) mod 6, 1 + (6*3 + 2) mod n) = (4,1).
      <b>Answer</b> = lcm(F(4,1)) = 4
</p>
</pre>