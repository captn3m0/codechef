---
category_name: medium
problem_code: DIREL
problem_name: 'Distant Relatives'
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
problem_author: 'vinayak garg'
problem_tester: gerald
date_added: 23-02-2014
tags:
    - ad
    - cook45
    - easy
    - graph
    - vinayak
editorial_url: 'http://discuss.codechef.com/problems/DIREL'
time:
    view_start_date: 1398018600
    submit_start_date: 1398018600
    visible_start_date: 1398018600
    end_date: 1735669800
    current: 1493557625
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK45/mandarin/DIREL.pdf) and [Russian](http://www.codechef.com/download/translated/COOK45/russian/DIREL.pdf) as well.

Chef is giving a big party to all his friends and their relatives. Relatives of very far-away (by relation) will be present. Little Joe (uninvited) is curious to know how distant two people are, say **X** and **Y**.

There are 6 fundamental relations: father relation, mother relation, son relation, daughter relation, brother relation and sister relation. Using these fundamental relations we can describe all other relations between relatives. For example, one can say that Chef Prime is son of daughter of sister of father of father of Chef Composite.

You are given **R** relations of form "**A** is **F** of **B**", for **N** people from the party. There variable **F** is one of the following strings: father, mother, son, daughter, brother, sister. Also you are given **Q** queries of Little Joe, each query has form "**X** **Y**". For each query output the distance between persons **X** and **Y**. Distance is equal to the minimal number of fundamental relations appearing while describing the relation between **X** and **Y**. For example distance between Chef Prime and Chef Composite is 5.

**Important points:**

1\. Here brother (or sister) relation is considered between children of same parents only. Hence cousins are not considered brother (or sister) .

2\. Given relations meet all the following conditions:

- Each person has an unique name, and each name appears in at least one relation (as **A**, or as **B**).
- No name appears more than once as the first part of relation (as **A**).
- There is no cyclic relations. For example, the following relations cannot appear simultaneously in some testcase "**A** is **F1** of **B**", "**B** is **F2** of **C**" and "**C** is **F3** of **A**".

3\. One can have at most one father and at most one mother. And in Chef's land no one takes divorce!

4\. Since you should calculate the minimal fundamental relations between some persons, you need to make some conclusion. For example, if **X** is father of **Y**, and **Y** is brother of **Z**, then **X** is father of **Z**.

### Input

The first line contains two integers **N**, number of people, and **R**, number of relations. Then **R** lines follow. Each line contains a relation of form "**A** is **F** of **B**".

The next line contains integer **Q**, number of queries. Each of the next **Q** lines contains two space-separated strings **X** and **Y**, denoting the query of the Little Joe. **X** and **Y** are guaranteed to be valid names mentioned above in relations.

### Output

Output **Q** lines each containing distance for **i**th query. Print '-1' (without quotes) if **X** and **Y** are not related in any manner.

### Constraints

- **2** ≤ **N** ≤ **256**
- **1** ≤ **R** < **N**
- **1** ≤ **Q** ≤ **16384**
- **1** ≤ **Length of string A, B, X, Y** ≤ **4**
- **A** ≠ **B**
- **X** ≠ **Y**
- Input relations are correct in terms of gender.
- Each name consists of lower case alphabets ("a-z") only.

### Example

<pre><b>Input:</b>
8 7
tom is brother of ron
ron is brother of john
john is father of kel
kel is son of cloe
cloe is sister of ru
anne is daughter of cloe
ru is mother of fred
5
kel john
ron kel
john ru
john kel
john anne

<b>Output:</b>
1
2
3
1
1
</pre>
### Explanation

Consider the first query: kel is son of john, so the distance = 1

Consider the second query: ron is brother of father of kel, so the distance = 2

Consider the third query: john is father of son of sister of ru, so the distance = 3. Note that relation between john and ru can also be expressed as john is father of daughter of sister of ru
