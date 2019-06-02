---
category_name: medium
problem_code: PRMQ
problem_name: 'Chef and Prime Queries'
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
problem_author: vipsharmavip
problem_tester: null
date_added: 27-03-2017
tags:
    - vipsharmavip
time:
    view_start_date: 1497259800
    submit_start_date: 1497259800
    visible_start_date: 1497259800
    end_date: 1735669800
    current: 1497284436
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE17/mandarin/PRMQ.pdf), [Russian](http://www.codechef.com/download/translated/JUNE17/russian/PRMQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JUNE17/vietnamese/PRMQ.pdf) as well.

Chef likes solving problems involving a lot of queries with prime numbers. One day, he found a new problem which is difficult for him to solve. So, he needs your help to solve it.

Given an array **a** of **N** integers and **Q** queries where each query provides you with four integers **L, R, X** and **Y**.

 For each query, output the value of **F(L, R, X, Y)** as defined below.

<pre>
F(L, R, X, Y) {

     result := 0
     for( i = X to i = Y )  {
         if( isPrime(i) ) {
             for( j = L to j = R ) {
                  number := a[j]
                  exponent := 0
                  while( number % i == 0 ) {
                     exponent := exponent + 1 
                     number := number/i
                  }
                  result := result + exponent
              }
         }
     }
     return result
}


</pre>
**isPrime(x)** returns true if **x** is Prime otherwise false.

### Input

- First line of the input contains a single integer **N** denoting the number of elements in a given array.
- Next line contains **N** integers separated by a space, which denotes **a\[1\], a\[2\], ..., a\[n\]**.
- Third line contains **Q** denoting the number of queries.
- Next **Q** lines contain four integers **L , R , X , Y**  separated by a space.

### Output

 Output the value for each **F(L, R, X, Y)** in a separate line.

### Constraints

- 1 ≤ **N, Q** ≤ 105
- 1 ≤ **L** ≤ **R** ≤ **N**
- 1 ≤ **X** ≤ **Y** ≤ 106
- 2 ≤ **a\[i\]** ≤ 106 , where 1 ≤ i ≤ **N**

### Subtasks 

- Subtask #1 (10 points): 1 ≤ **N, Q** ≤ 100
- Subtask #2 (20 points): 1 ≤ **N, Q** ≤ 1000
- Subtask #3 (70 points): Original constraints
 
### Example

<pre><b>Input:</b>
4 
2 3 4 5
2
1 3 2 3
1 4 2 5

<b>Output:</b>
4
5
</pre>
### Explanation

**Query 1** :

The first prime is 2. 2 divides the first element 1 time, 2 divides the second element 0 times and 2 divides the third element 2 times. Hence 2 contributes a total of 3 to the result ( 1 + 0 + 2 = 3 )

The second prime is 3. 3 divides the first element 0 times, 3 divides the second element 1 time and 3 divides the third element 0 times. Hence it contributes 1 to the result ( 0 + 1 + 0 = 1 )

The final answer is the sum of the contributions, which is 4 (3 + 1 = 4)

**Query 2** :

The first prime we consider is 2. 2 divides the first element in our range 1 time, 2 divides the second element 0 times, 2 divides the third element 2 times and 2 divides the fourth element 0 times. Thus 2 contributes a total of 3 to the result ( 1 + 0 + 2 + 0 = 3 )

The second prime in our \[**X, Y**\] range is 3. 3 divides the first element 0 times, 3 divides the second element 1 time, 3 divides the third element 0 times and 3 divides the fourth element 0 times. Thus 3 contributes a total of 1 ( 0 + 1 + 0 + 0 = 1 )

The third prime is 5. 5 divides the first element 0 times , 5 divides the second element 0 times, 5 divides the third element 0 times and 5 divides the fourth element 1 time. So 5 contributes 1 ( 0 + 0 + 0 + 1 = 1 )

The final answer is the sum of all the contributions, which is 5 ( 3 + 1 + 1 = 5)

 Note : Use fast I/O due to large input files
