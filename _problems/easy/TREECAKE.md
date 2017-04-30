---
category_name: easy
problem_code: TREECAKE
problem_name: 'Tree Cake'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 3-04-2016
tags:
    - kingofnumbers
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/TREECAKE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/TREECAKE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/TREECAKE.pdf) as well.

Chef is well known for his delicious cakes with various flavors and shapes. One of his famous cakes is in the shape of a rooted binary tree of height **H**. The rooted binary tree has a very interesting property - for each non leaf node **v**, the height of the sub-tree rooted at the right child of **v** is exactly 1 more than that of the sub-tree rooted at the left child of node **v**. Note that the height of the leaf node of the tree is considered to be one and that of an empty subtree is considered to be zero. You can observe that the above property uniquely determines the rooted tree for a fixed height. So, instead of giving the entire rooted tree, we will just specify its height in the input.

Chef wants to cut his cake into some vertex-disjoint paths such that each node belongs to exactly one path. He wants your help to find out the minimum number of vertex-disjoint paths that cake be cut into.

Let us take an example. The picture below describes the tree of height **H = 4**. Chef can cut this tree into 2 vertex-disjoint paths. These two paths are shown in green and red colors, respectively. This is the minimum number of paths that Chef can cut the cake into.

![](https://s3.amazonaws.com/codechef_shared/download/upload/SNCKFL16/1.png)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. This is followed by the description of the test cases.

The only line of each test case contains a single integer **H**.

### Output

For each test case, output a single integer in a separate line denoting the minimum number of vertex disjoint paths into which cake can be cut. As the answer could be large, output it modulo **109 + 7**

### Constraints

- **1** ≤ **T** ≤ **104**
- **1** ≤ **H** ≤ **1018**

### Example

```
<b>Input:</b>
<tt>2
1
4</tt>

<b>Output:</b>
<tt>1
2</tt>

```
### Explanation

**Example case 1.** The rooted tree will consist of only 1 node. So, Chef can cut the entire cake into 1 vertex-disjoint path consisting of the single node itself.

**Example case 2.** This case is already explained in the problem description.