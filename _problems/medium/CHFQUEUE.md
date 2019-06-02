---
category_name: medium
problem_code: CHFQUEUE
problem_name: 'Chefs in Queue'
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
problem_author: vineetpaliwal
problem_tester: null
date_added: 16-10-2013
tags:
    - arithmetic
    - cakewalk
    - ltime05
    - modulo
    - multiplication
    - queue
    - stack
    - vineetpaliwal
editorial_url: 'http://discuss.codechef.com/problems/CHFQUEUE'
time:
    view_start_date: 1382862600
    submit_start_date: 1382862600
    visible_start_date: 1382862600
    end_date: 1735669800
    current: 1493557558
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME05/russian/CHFQUEUE.pdf)

All the chefs (except the Head Chef) are standing in queue to submit their bills. The chefs have different seniority. In all there are **N** chefs of **K** different seniority levels. Head Chef gets an interesting thought past his head. He begins to think what if every chef starting from the end of the queue begins to delegate his job of submitting bills to a chef least ahead of him in the queue but junior to him. The Head Chef's fearfulness of this scenario is **f = i2 - i1 + 1**, where **i1** is the index of chef in queue and **i2** is the index of the junior chef. Head Chef's total fearfulness of chaos is the product of all the fearfulness in Head Chef's mind. Note if a chef has no junior ahead of him/her in the queue then Head Chef's fearfulness for this Chef is **1**. You are required to find the Head Chef's total fearfulness given an arrangement of Chef's in a queue. Since this number can be quite large output it modulo **1000000007**.

### Input

Input description.

- The first line contains two integers **N** and  **K**  denoting the number of chefs and the number of seniority levels. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the seniority of chefs in the queue. **AN** denotes front of the queue and **A1** denotes end of the queue.

### Output

Output description.

- Output a single integer denoting the total fearfulness of the Head Chef.

### Constraints

- **1** ≤ **N** ≤ **1000000**
- **1** ≤ **a\_i** ≤ **1000000**
- **2** ≤ **K** ≤ **100000**

### Example

<pre><b>Input:</b>
4 2
1 2 1 2

<b>Output:</b>
2
</pre>
### Explanation

**Example case 1.** Only the second chef has a junior in front of him and the fearfulness he causes to the head chef is 3 - 2 + 1 = 2. Every other chef causes a fearfulness of 1 for the Head Chef.

### Scoring

**Subtask 1 : N <= 5000 ( 10 points)** 

 **Subtask 2 : K = 2 ( 10 points)**  

 **Subtask 3 : K <= 10 ( 20 points )**  

 **Subtask 4 : See Constraints ( 60 points )**
