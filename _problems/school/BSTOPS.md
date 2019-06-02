---
category_name: school
problem_code: BSTOPS
problem_name: 'BST Operations'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: anukul
problem_tester: null
date_added: 1-04-2017
tags:
    - anukul
time:
    view_start_date: 1554229800
    submit_start_date: 1554229800
    visible_start_date: 1554229800
    end_date: 1735669800
    current: 1559472924
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available. Write a program that processes the following queries on a Binary Search Tree:
 **i x**: Insert **x** in the BST
 **d x**: Delete **x** from the BST

### Input format

- Line 1 contains an integer **Q**, the number of queries
- The next **Q** lines are of the form **i x** or **d x**
 
### Output format

- For each query, print the position of **x** in the BST
- If the position of a node is **p**, the positions of its left and right children are **2\*p** and **2\*p+1** respectively
- Position of the root node is 1
 
### Test data

- 1 ≤ **N** ≤ 103
- -109 ≤ **x** ≤ 109
- 1 ≤ position(**x**) ≤ 232 - 1
- It is guaranteed that there will be no duplicates in the BST
 
### Sample Input

 ```
<tt>
5
i 1
i 2
i 0
d 2
i 3
	</tt>
<pre>
### Sample Output

 ```
<tt>
1
3
2
3
3
	</tt>
</pre>
### Explanation

 ```
<tt>
On inserting 1,

1

On inserting 2:

1
 \
  2

On inserting 0:

   1
  / \
 0   2

After deleting 2:

  1
 /
0

On inserting 3:

   1
  / \
 0   3

	</tt>
<pre>