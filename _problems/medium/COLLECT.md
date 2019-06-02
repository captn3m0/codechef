---
category_name: medium
problem_code: COLLECT
problem_name: 'Collecting Magical Berries'
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
problem_author: xcwgf666
problem_tester: tuananh93
date_added: 30-11-2012
tags:
    - combinatorics
    - june13
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/COLLECT'
time:
    view_start_date: 1371462288
    submit_start_date: 1371462288
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493557596
layout: problem
---
All submissions for this problem are available.ChefLand is very famous for its magical forests. There you can find a lot of different trees, fruits, mushrooms and many other charming things. Recently, **N** bushes of magical berries (numbered **1** to **N**) have been discovered. The berries are in fact very tasty, and it has become very popular among the tourists to pick these berries (don't worry, as the berries are magical, they'll grow next night again :) ).

Groups of tourists often want to go for a walk to pick some berries. For the **i**-th group it is known that it consists of **Ki** people and they will collect all the berries, from **Ki** consecutive bushes, beginning from the **Li**-th, going to the **Li+1**-th, the **Li+2**-th and so on. Generally, a plan of the **i**-th group of tourists can be described by the numbers **Li** and **Ri** - the leftmost and the rightmost bush for the **i**-th group. When the group have picked some amount of berries, we consider that they've picked all the berries from the bushes from the **Li**-th to the **Ri**-th, they want to divide them *fairly*. *Fair* division is a division in such a way, that the difference between the maximal and the minimal number of berries a single tourist from the group receives is less than two. All the berries (even from a single bush) are different. Generally, there are a lot of ways to divide them fairly. For example, you can divide fairly two berries between two tourists in two ways.

Some tourists are fond of dividing the berries. So, they will get upset if the number of ways to divide them is too small. But some tourists will get upset if the number of ways if too huge, they will find it quite confusing. So, the ChefLand tourist agency has offered the following service: for each group of tourists they tell the number of ways to divide the berries
fairly among them after the walk. As they currently don't have enough employees, they've asked you to help them. Of course, the number of berries on bushes changes during a day. You'll receive this information. Also, you'll receive the information about the groups of tourists. For each group of tourists, please tell the number of ways to divide collected berries fairly. We understand that this number can be quite huge, so we ask you to calculate it modulo **3046201**.

### Input

The first line of the input consists of a single integer **N** - the number of bushes.

The second line consists of **N** integers - the **i**-th integer corresponds to the amount of the berries on the **i**-th bush in the beginning.

The third line consists of a single integer **Q** - the number of requests given to your program. 

Next **Q** lines are the lines of the following form: "change A B" - then the amount of the berries on the bush **A** becomes equal to **B**, or "query L R" - if a group of tourists wants to visit all the bushes from the **L**-th to the **R**-th, what is the number of ways to divide their collected berries fairly, modulo **3046201**.

### Output

For each "query L R" request, output the number of ways, asked in the statement, modulo **3046201**. Output one number on a single line.

### Constraints

- **1**<=**N**<=**100000**
- **1**<=**Q**<=**100000**
- You can assume that the number of berries on a single bush will not exceed **30**

### Example

<pre>
<b>Input:</b>
8
2 1 1 2 1 2 2 2 5
change 2 2
query 1 8
query 5 7
query 3 3
query 4 4

<b>Output:</b>
2065880
90
1
1

</pre>