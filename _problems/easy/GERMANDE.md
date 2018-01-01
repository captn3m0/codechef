---
category_name: easy
problem_code: GERMANDE
problem_name: Gerrymander
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
problem_author: admin2
problem_tester: null
date_added: 9-02-2017
tags:
    - admin2
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available. The country of BitLand is divided into **N** districts, and these districts are arranged in a circle: **1, 2, 3, ..., N**, where **i** and **i+1** are adjacent for all **1 ≤ i ≤ N-1**, and also **1** and **N** are adjacent. It is given that **N = o1 \* o2**, where **o1** and **o2** are odd integers.

There are only 2 political parties in BitLand: the Zeros and the Ones. There was an election, in which each district chose it's representative who is either a Zero or a One. We know this data. i.e. for each of the **N** districts, we know whether their representative is a Zero or a One.

The **N** districts should be partitioned into **o1** states, where each state consists of **o2** consecutive districts. 
For example, if **o1 = 5** and **o2=3**, then **N=15**, and {1,2,3} would be a valid state. {2,3,4}, {13,14,15}, {14,15,1}, {15,1,2} are other examples of valid states. But {3,5,6} is not a valid state, because the districts are not consecutive.

A state gets a One Governor if, among all the **o2** district representatives belonging to it, there are more One district representatives than Zero representatives. And it gets a Governor who is from the Zero party, if the majority of its district representatives are from the Zero party. And because **o2** is odd, there will be no ties.

The President of BitLand will be a One if the majority of the **o1** state Governors are Ones. Otherwise, the President will be from the Zero party.

But the state boundaries have not been fixed yet. Given just the district-wise data (i.e. whether each district's representative is a Zero or a One), you need to find if there is a way to partition them into states such that the President is a One.

### Input

- The first line contains one integer, **T**, which is the number of testcases.
- The first line of each testcase contains two space separated integers, **o1** and **o2**, which are the number of states, and number of districts in each state, respectively.
- The next line of each testcase contains **N = o1 \* o2** space separated integers: **d1, d2, .., dN**. If **di** is **1**, then it signifies that District **i** has chosen a One representative. If **di** is , then they have a Zero representative.

### Output

- Each testcase should be in a new line, and should contain **1**, if the President can be a One, and  otherwise.

### Constraints

For all subtasks you may assume that:

- **1 ≤ T ≤ 100**
- **o1,o2** will be odd positive integers.
- **1 ≤** Summation of **o1\*o2** over all testcases **≤ 106**
- **0 ≤ di ≤ 1**

**Subtask 1**: For 10% of the score,

- **1 ≤** Summation of **o1\*o2** over all testcases **≤ 104**

**Subtask 2**: For further 20% of the score,

- **1 ≤ o1 ≤ 104**
- **1 ≤ o2 ≤ 102**

**Subtask 3**: For further 70% of the score,

- No further constraints.

### Example

<pre><b>Input:</b>
4
5 1
1 0 0 1 1
3 3
0 0 1 1 0 1 1 0 0
3 3
1 1 1 0 1 0 0 1 0
3 3
1 0 0 1 1 0 1 0 0

<b>Output:</b>
1
1
1
0

</pre>### Explanation
In the first testcase, each state should have only 1 district, and hence, there is no actual choice in constructing the states. There will be three One Governors, and two Zero Governors, and hence the President will be a One.

In the second testcase, each of the three states should should have 3 districts each. Consider the following partitioning of the districts into states: {2,3,4}, {5,6,7} and {8,9,1}. So, the first state consists of the districts {2,3,4}, and the representatives of these correspond to {0,1,1}. The majority is One, and hence the first state will have a One Governor. The representatives corresponding to the second state are {0,1,1}, and so again, this will have a One Governor. The third state has representatives {0,0,0}, and hence will have a Zero Governor. On the whole, there are two One Governors, and one Zero Governor, and hence the President will be a One. And since there is a way to partition the districts into states, in which the President is a One, the answer is 1.

In the third testcase, each of the three states should should have 3 districts each. Consider the following partitioning of the districts into states: {3,4,5}, {6,7,8} and {9,1,2}. So, the first state consists of the districts {3,4,5}, and the representatives of these correspond to {1,0,1}. The majority is One, and hence the first state will have a One Governor. The representatives corresponding to the second state are {0,0,1}, and since the majority is Zero, this will have a Zero Governor. The third state has representatives {0,1,1}, and as Ones are in majority, this will have a One Governor. On the whole, there are two One Governors, and one Zero Governor, and hence the President will be a One. And since there is a way to partition the districts into states, in which the President is a One, the answer is 1.

In the fourth testcase, you can check that no matter how you construct the states, the President cannot be a One. Hence, the answer is 0.
