---
category_name: medium
problem_code: CARDLINE
problem_name: 'Chef and the Cards'
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
problem_author: rustinpiece
problem_tester: iscsi
date_added: 31-07-2015
tags:
    - cook61
    - dynamic
    - graphs
    - greedy
    - medium
    - rustinpiece
editorial_url: 'http://discuss.codechef.com/problems/CARDLINE'
time:
    view_start_date: 1440357545
    submit_start_date: 1440357545
    visible_start_date: 1440357600
    end_date: 1735669800
    current: 1493557499
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK61/mandarin/CARDLINE.pdf) and [Russian](http://www.codechef.com/download/translated/COOK61/russian/CARDLINE.pdf) as well.

There are **N** cards placed in a row, where every card has two numbers written on it, one on the top and
one on the bottom. The numbers are between **1** and **N** (both inclusive). Every number is written on the top of exactly one card, and on the bottom of exactly one card as well.

Chef wants to rearrange the cards, such that the length of the longest common contiguous subsequence between the sequence formed by number written on top of the cards, and that formed by those written on the bottom is maximum. He can't modify the numbers written on any card and can't flip the cards, that is, for any card the number written on top remains at the top and the number written on bottom stays at the bottom. Find out the maximum possible length of the common contiguous subsequence.

### Input

The first line of input contains an integer **T** denoting the number of test cases.

- The first line of each test
  case contains an integer **N**.
- The next line contains **N** space separated integers **A1, A2, ... , AN**, where **Ai**(**1** ≤ **i** ≤ **N**) is the number written on the top of the **i**-th card.
- The next line contains **N** space separated integers **B1, B2, ... , BN**, where **Bi**(**1** ≤ **i** ≤ **N**) is the number written at the bottom of the **i**-th card.

### Output

For each test case, output a single line containing the integer **L**: the maximum length of the longest common contiguous subsequence.

### Constraints

- **1** ≤ **T** ≤  **100**
- **1** ≤ **N** ≤  **2000**
- **1** ≤ **Ai, Bi** ≤  **N**
- All the elements in both arrays **A** and **B** are distinct.

### Example

```
<b>Input:</b>
2
3
1 3 2
2 1 3
8
3 8 4 2 6 1 5 7
5 2 4 3 8 7 6 1

<b>Output:</b>
2
4

```
### Explanation

**First Example :**  

One of the possible card arrangements is: 
1 2 3 
2 3 1 />

Length of the longest common contiguous subsequence between \[1, 2, 3\] and \[2, 3, 1\] is 2, \[2, 3\]. And that's the maximum possible, so answer is 2.

**Second Example:**  

One of the possible card arrangements is : 

7 3 2 8 6 5 4 1 

1 5 3 2 8 6 4 7 
/>/>/>/>

The longest common contiguous subsequence has length 4 \[3, 2, 8, 6\] here. There is no way to arrange these cards such that it's more than 4.

### Note

Let **L** be the answer. Let **Ci** be the value written on the top of the card at **i**th position and **Di** be the value written on the bottom of the card at **i**th position after rearranging. Then, there should be a pair **(x, y)** (**1 ≤ x,y ≤ N-L+1**) such that the condition **Cx+j** = **Dy+j** is satisfied for all **j**, where **0 ≤ j < L**.