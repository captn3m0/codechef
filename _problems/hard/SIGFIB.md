---
category_name: hard
problem_code: SIGFIB
problem_name: 'Team Sigma and Fibonacci'
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
max_timelimit: '6'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: null
date_added: 23-04-2014
tags:
    - aug14
    - devuy11
    - hard
    - mathematics
editorial_url: 'http://discuss.codechef.com/problems/SIGFIB'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493556846
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG14/mandarin/SIGFIB.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/SIGFIB.pdf).

Sigma and Fibonacci were two geeky friends. As ACM ICPC is near, they have started forming teams. Sigma loved summing series and Fibonacci loved playing with fibonacci numbers. They made Gopu as their ACM ICPC Coach. To train them up, Gopu gave them a challenge which will require both of their coordination to solve it. The challenge given by Gopu is described below:

Gopu gave them two numbers **M** and **N** and asked them to solve : 
 ( ∑ ( 6 \* x \* y \* z \* Fibo\[x\] \* Fibo\[y\] \* Fibo\[z\] ) ) % M , where x + y + z = N.
Here x, y, z ≥ 0 and are integers.

Fibo is the Fibonacci number define as follows.

- Fibo\[0\] = 0
- Fibo\[1\] = 1
- Fibo\[i\] = Fibo\[i-1\] + Fibo\[i-2\] ∀ i ≥ 2 .

 Now Gopu is wondering whether he will be able to determine whether they have calculated the solution of the problem correctly or not ! Help Gopu to find the correct answers , so that he can judge the solution for the team.

### Input 

First line of input contains an integer **T** denoting the number of test cases. Each test case begins in a new line, containing two space separated numbers representing **M** and **N** respectively.

### Output

 For each test case, output answer as stated above in a new line.

### Constraints


- Sum of **M** over all test cases will be ≤ 106.
- 0 ≤ **N ≤** 1018
- 1 ≤ **M ≤** 105

### Example

```
<span style="font-size: small;"><strong>Input:</strong>
4<br></br>100 3<br></br>100 4<br></br>100 9<br></br>100 10<br></br><strong>Output:</strong>
6<br></br>36<br></br>66<br></br>60<br></br></span>
```
### Explanation for first test case:

 In the first case, we have the following 10 terms for **N** = 3:
6 \* 0\*0\*3\*Fibo\[0\] \* Fibo\[0\] \* Fibo\[3\]
6 \* 0\*1\*2\*Fibo\[0\] \* Fibo\[1\] \* Fibo\[2\]
6 \* 0\*2\*1\*Fibo\[0\] \* Fibo\[2\] \* Fibo\[1\]
6 \* 0\*3\*0\*Fibo\[0\] \* Fibo\[3\] \* Fibo\[0\]
6 \* 1\*0\*2\*Fibo\[1\] \* Fibo\[0\] \* Fibo\[2\]
6 \* 1\*1\*1\*Fibo\[1\] \* Fibo\[1\] \* Fibo\[1\]
6 \* 1\*2\*0\*Fibo\[1\] \* Fibo\[2\] \* Fibo\[0\]
6 \* 2\*0\*1\*Fibo\[2\] \* Fibo\[0\] \* Fibo\[1\]
6 \* 2\*1\*0\*Fibo\[2\] \* Fibo\[1\] \* Fibo\[0\]
6 \* 3\*0\*0\*Fibo\[3\] \* Fibo\[0\] \* Fibo\[0\]
Here 6\*1\*1\*1\* Fibo\[1\] \* Fibo\[1\] \* Fibo\[1\] = 6 is only the non-zero term, the answer is 6.