---
category_name: medium
problem_code: TYTACTIC
problem_name: 'Tywins Tactics'
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
problem_author: pragrame
problem_tester: tuananh93
date_added: 7-06-2013
tags:
    - cook35
    - dfs
    - pragrame
    - simple
editorial_url: 'http://discuss.codechef.com/problems/TYTACTIC'
time:
    view_start_date: 1372012200
    submit_start_date: 1372012200
    visible_start_date: 1414769400
    end_date: 1735669800
    current: 1493557952
layout: problem
---
All submissions for this problem are available.Tywin Lannister is a tactical genius. At the heart of his tactical skills, is the way he has organized his armies, and the way he is able to estimate his soldiers' skill-levels, thus helping him make crucial decisions as to whom to dispatch to which areas of the war.

His army is organized in the form of a hierarchy - indeed it is a tree, with him as the root. We say "**A has immediate superior B**" if **A** reports directly to **B**. We further say "**A has superior B**" if there is a chain of soldiers starting with **A**, ending with **B**, and where each soldier reports directly to the next soldier of the chain. Further, each soldier is assigned an initial **skill-level** based on prior experience and battle proficiency.

In order for Tywin to decide whom to send to which battle, he has the following scheme: He chooses a particular soldier **S** as the leader of his temporary 'regiment', and sends in to battle, **S** as well as all the soldiers that have **S** as one of their superiors. He estimates the skill level of the regiment as the total skill level of all the soldiers under **S** (denoted by query "**Q S**").

After a battle, he may want to update the skill levels of some soldiers. If he wants to update the skill level of soldier **S** to value **x**, it is denoted by the query "**U S x**".

You are given the structure of the army, whose size is **N**, the initial skill levels of all the individual soldiers, as well the number of queries **M**. For each query of the type "**Q S**", report the sum of skill-levels of all the soldiers who have **S** as their superior.

**Note:** The soldiers are numbered 1 to **N**, and Tywin is given the number **1**.

### Input

The first line consists of the integers **N** and **M**, denoting the number of soldiers and the number of queries.

This is followed by a single line consisting of **N** nonnegative values - the **skill levels of the N soldiers**.

This is then followed by **N-1** lines consisting of pairs of integers **(u, v)**, denoting that either **u is an immediate superior of v, or vice-versa**.

Finally you are given the **M** queries, of either the form "**U S x**" or "**Q S**".

### Output

For each "**Q S**" query, output the sum of skill values of all the soldiers under **S**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **105**
- All skill values given with be in the range \[0, **20,000**\]
- **1** ≤ **S** ≤ **N** for all queries
- All soldiers will have soldier **1** (Tywin) as their superior

### Example

<pre>
<b>Input:</b>
5 8
7 2 0 5 8
1 2
2 3
2 4
1 5
Q 1
Q 2
U 2 4
Q 1
Q 2
U 5 3
Q 1
Q 2

<b>Output:</b>
22
7
24
9
19
9
</pre>