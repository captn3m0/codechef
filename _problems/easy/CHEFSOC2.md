---
category_name: easy
problem_code: CHEFSOC2
problem_name: 'Chef and Big Soccer'
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
problem_author: berezin
problem_tester: kevinsogo
date_added: 12-04-2016
tags:
    - berezin
    - dynamic
    - easy
    - may16
editorial_url: 'http://discuss.codechef.com/problems/CHEFSOC2'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493558213
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/CHEFSOC2.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/CHEFSOC2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/CHEFSOC2.pdf) as well.

Chef is a big fan of soccer! He loves soccer so much, that he even invented soccer for his pet dogs! Here are the rules of the game:

- There are **N** dogs numerated from **1** to **N** stay in a line, so dogs **i** and **i + 1** are adjacent.
- There is a ball which dogs will pass around. Initially, dog **s** has the ball.
- A dog with ball can pass it to another dog. If the current pass-strength of dog is **x**, then it can pass the ball to either dog **i - x** or dog **i + x** (provided such dog/s exist).

To make it even more exciting, Chef created an array **A** of **M** positive integers denoting pass strengths. In i-th pass, current pass-strength of the dog making the pass will be given by **Ai**.
Chef asks dogs to execute these **M** passes one by one. As stated before, dog **s** will make the first pass, then some other dog and so on till **M** passes.

Dogs quickly found out that there can be lot of possible sequences of passes which will end up with a dog having the ball. Now each dog asks your help in finding number of different pass sequences which result in this dog ending up ball. Two pass sequences are considered different if after some number of passes they lead the ball to different dogs. As the answer could be quite large, output it modulo **109 + 7 (1000000007)**.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains three space separated integers **N, M, s** denoting the number of dogs, number of pass strengths and number of dog having a ball at the beginning.
- The second line contains **M** space-separated integers **A1**, **A2**, ..., **AM** denoting the pass strengths.

### Output

- For each test case, output a single line containing **N** space-separated integers, where i-th integer should be equal to number of different valid pass sequences leading the ball to i-th dog modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, M** ≤ **10^3**
- **1** ≤ **s** ≤ **N**
- **1** ≤ **Ai** ≤ **10^3**

### Subtasks

- Subtask #1 (30 points) : **N, M** ≤ **10**
- Subtask #2 (70 points) : **Original constraints**

### Example

<pre><b>Input:</b>
3
3 2 2
1 2 
3 3 3
1 1 1
3 1 1
3

<b>Output:</b>
1 0 1
0 2 0
0 0 0
</pre>
### Explanation

**Example case 1.**
Possible sequence for dog **1** is **2->3->1**.
Possible sequence for dog **3** is **2->1->3**.

**Example case 2.**
Possible sequences for dog **2** are **3->2->1->2** and **3->2->3->2**.

**Example case 3.**
There are no valid sequences for such input.
