---
category_name: hard
problem_code: LMATRIX3
problem_name: 'Make It Zero 3'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: ACRush
problem_tester: white_king
date_added: 3-03-2014
tags:
    - ACRush
    - april14
editorial_url: 'http://discuss.codechef.com/problems/LMATRIX3'
time:
    view_start_date: 1397468225
    submit_start_date: 1397468225
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493556759
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/LMATRIX3.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/LMATRIX3.pdf).

### Problem description.

Aleksandra is the most popular girl in the city.
Each boy can only dream about dating her.
Other girls want to be like her.

Aleksandra is going to find herself a boyfriend.
Of course such a beauty needs someone special.
That's why she is going to announce a quiz.
Even you can try your chances at this.
Apart from boys, the girl also loves math.
That's why this quiz is going to be mathematical.

Has you heard this story before?
In fact, Aleksandra gave the problem
[Make It Zero 2](http://www.codechef.com/FEB14/problems/LMATRIX2)
in CodeChef Febrary Challenge.
Unfortunately, no boy can solve that problem optimally in all cases.
Therefore, Aleksandra refactors the problem and asks for the optimal solutions to all boys in the

city.

She has one number **P** and one array with **N** elements each.
Let **Ai** be the **i**th element of the array.
She likes 0, that's why she is going to get rid of all non zero numbers in the array.
In each turn she may choose 3 integers:

- **1 ≤ s ≤ t ≤ N**
- **0 ≤ k ≤ 10000**

and after this, for all numbers **i** in the array such that: **s ≤ i ≤ t**,
she does the following:

- **Ai = (k + Ai) modulo P**

It takes her a lot of turns to do this. That's why she gives this problem to all boys in the

city
and promises to go for a date with the one who will solve all tasks with the fewest number of

moves.
It is your chance to walk with such a wonderful girl. Just do it!

### Input

The first line contains one interger **T** indicates the number of testcases.

The first line of each testcase contains two space-separated integers **N** and **P**,
denoting the size of the array and the parameter **P**.

The size of the array may be very large.
We represent it by concatenating (in order) many subarrays.
The next line contains one interger **M**, denoting number of subarrays.
The next **M** lines each contains 4 integers **Fi**,
**Ci**, **Di** and **Li**.
All subarrays are generated as follows:

- Denote **Bi,j** as the **jth** element of the **ith** subarray.
- **Bi,1 = Fi**
- For each **1 < j ≤ Li**, **Bi,j = (Bi,j-1 \* Ci + Di) module P**

You can assume that **N = L1 + L2 + ... + LM**.

### Output

For each testcase, print one line containing one integer **C**,
denoting the minimal number of the moves for erasing all non zero numbers from the array.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **M** ≤ **100**
- **1** ≤ **P** ≤ **10**
- 0 ≤ **Fi**, **Ci**, **Di** < **P**
- **1** ≤ **Li** ≤ **1015**

### Example

<pre>
<b>Input:</b>
3
3 1
1
0 0 0 3
4 10
4
3 0 0 1
5 0 0 1
5 0 0 1
3 0 0 1
6 6
1
0 1 1 6

<b>Output:</b>
0
2
5

</pre>### Explanation

 **Example case 1:**  All numbers are zero.

 **Example case 2:**  Initially, A = {3, 5, 5, 3}. In the first turn, we choose s=2, t=3, and k=8, after which A = {3, 3, 3, 3}. Then all numbers will become zero after the second turn.

 **Example case 3:**  Initially, A = {0, 1, 2, 3, 4, 5}. One optimal solution is to change non-zero numbers to zero one by one.
