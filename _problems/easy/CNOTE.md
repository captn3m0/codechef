---
category_name: easy
problem_code: CNOTE
problem_name: 'Chef and Notebooks'
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
problem_author: ma5termind
problem_tester: laycurse
date_added: 29-09-2014
tags:
    - basic
    - cakewalk
    - ma5termind
    - march15
editorial_url: 'http://discuss.codechef.com/problems/CNOTE'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MARCH15/mandarin/CNOTE.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/CNOTE.pdf).

Chef likes to write poetry. Today, he has decided to write a **X** pages long poetry, but unfortunately his notebook has only **Y** pages left in it. Thus he decided to buy a new CHEFMATE notebook and went to the stationary shop. Shopkeeper showed him some **N** notebooks, where the number of pages and price of the **i**th one are **Pi** pages and **Ci** rubles respectively. Chef has spent some money preparing for Ksen's birthday, and then he has only **K** rubles left for now.

Chef wants to buy a single notebook such that the price of the notebook should not exceed his budget and he is able to complete his poetry.

Help Chef accomplishing this task. You just need to tell him whether he can buy such a notebook or not. Note that Chef can use all of the **Y** pages in the current notebook, and Chef can buy only one notebook because Chef doesn't want to use many notebooks.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases are follow.

The first line of each test case contains four space-separated integers **X**, **Y**, **K** and **N**, described in the statement. The **i**th line of the next **N** lines contains two space-separated integers **Pi** and **Ci**, denoting the number of pages and price of the **i**th notebook respectively.

### Output

For each test case, Print "**LuckyChef**" if Chef can select such a notebook, otherwise print "**UnluckyChef**" (quotes for clarity).

### Constraints and Subtasks

- **1 ≤ T ≤ 105**
- **1 ≤ Y &lt; X ≤ 103**
- **1 ≤ K ≤ 103**
- **1 ≤ N ≤ 105**
- **1 ≤ Pi, Ci ≤ 103**

**Subtask 1: 40 points**

- Sum of **N** over all test cases in one test file does not exceed **104**.

**Subtask 2: 60 points**

- Sum of **N** over all test cases in one test file does not exceed **106**.

### Sample

<pre>
<b>Input</b>
3
3 1 2 2
3 4
2 2    
3 1 2 2
2 3
2 3    
3 1 2 2
1 1
1 2

<b>Output</b>
LuckyChef
UnluckyChef
UnluckyChef
</pre>
### Explanation

**Example case 1.** In this case, Chef wants to write **X = 3** pages long poetry, but his notebook has only **Y = 1** page. And his budget is **K = 2** rubles, and there are **N = 2** notebooks in the shop. The first notebook has **P1 = 3** pages, but Chef cannot buy it, because its price is **C1 = 4** rubles. The second notebook has **P2 = 2** pages, and its price is **C2 = 2** rubles. Thus Chef can select the second notebook to accomplish the task. He will write **1** page of poetry in the old notebook, and **2** page of poetry in the new notebook.

**Example case 2.** Chef cannot buy any notebook, because the prices exceed the Chef's budget.

**Example case 3.** No notebook contains sufficient number of pages required to write poetry.
