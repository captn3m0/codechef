---
category_name: hard
problem_code: AVDWAST
problem_name: 'Avoid Wasting'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - cook30
    - greedy
    - laycurse
    - medium
editorial_url: 'http://discuss.codechef.com/problems/AVDWAST'
time:
    view_start_date: 1358709975
    submit_start_date: 1358709975
    visible_start_date: 1358709858
    end_date: 1735669800
    current: 1493556620
layout: problem
---
All submissions for this problem are available.Today Tomya buys **N** retort pouches of food in Chef Ciel's restaurant. The **i**-th retort pouch contains **Vi** units of food, and its use-by date is the **Ui**-th day (1-origin). Moreover, food from the **i**-th retort pouch can be eaten only within **Li** days after it was opened. Namely, if Tomya will open the **i**-th retort pouch on the **xi**-th day, she can eat food units from it on the **k**-th day if and only if **xi** ≤ **k** ≤ **min(Ui, xi+Li−1)**.

The retort pouches in Ciel's restaurant are designed in such a way that if **Vi < Vj**, then **Ui ≤ Uj**.

Tomya will eat at most two units of food everyday. However after the **min(Ui, xi+Li−1)**-th day, uneaten food units in the **i**-th retort pouch must be discarded. Your task is to decide when to open each of the retort pouches and which food unit(s) to eat each day in such a way that the number of discarded units will be minimum.

**There is also a restriction that once you open some pouch, food units from previously opened pouches should be discarded.**

**The above restriction is an addition to the problem statement that was made after the contest. We are extremely sorry about that. We all had missed the possibility to achieve better score without this restriction in some situations. We are grateful to [Mikhail Kever](http://www.codechef.com/users/mikhailOK) for pointing out our mistake.**

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the number of retort pouches.
Each of the following **N** lines contains 3 space separated integers **Vi**, **Ui**, **Li** denoting the parameters of the **i**-th pouch.

### Output

For each test case, output a single line containing the minimum number of food units which Tomya must discard.

### Constraints

- **1** ≤ **T** ≤ **2013**
- **1** ≤ **N** ≤ **2013**
- **1** ≤ **Vi**, **Ui**, **Li** ≤ **20000000000000** (**2 \* 1013**)
- If **Vi** < **Vj**, then **Ui** ≤ **Uj**
- The sum of **N** in one test file does not exceed **20130**.

### Example

<pre>
<b>Input:</b>
3
3
8 9 5
7 5 3
10 100 1
3
5 4 3
7 8 5
8 10 4
1
10000 1 10000

<b>Output:</b>
9
0
9998

</pre>### Explanation
**Example case 1.** One of the optimal ways is the following:
The 1st pouch is opened on the day **x1 = 4**,
the 2nd pouch is opened on the day **x2 = 1**,
the 3rd pouch is opened on the day **x3 = 8**,
then
the 1st pouch is available at the interval **\[4, 8\]**,
the 2nd pouch is available at the interval **\[1, 3\]**,
the 3rd pouch is available at the interval **\[8, 8\]**.
On days 1, 2, 3, Tomya eats 2 units of the 2nd pouch each day.
On days 4, 5, 6, 7 Tomya eats 2 units of the 1st pouch each day.
On day 8, Tomya eats 2 units of the 3rd pouch.
In this case, Tomya discard the 1 unit of the 1st pouch, and 8 units of the 3rd pouch.

**Example case 2.** There is only one optimal way as follows:
The 1st pouch is opened on the day **x1 = 1**,
the 2nd pouch is opened on the day **x2 = 3**,
the 3rd pouch is opened on the day **x3 = 7**,
then
the 1st pouch is available at the interval **\[1, 3\]**,
the 2nd pouch is available at the interval **\[3, 7\]**,
the 3rd pouch is available at the interval **\[7, 10\]**.
On days 1, 2, Tomya eats 2 units of the 1st pouch each day.
On day 3, Tomya eats 1 unit of the 1st pouch and 1 unit of the 2nd pouch.
On days 4, 5, 6, Tomya eats 2 units of the 2nd pouch each day.
On days 7, 8, 9, 10, Tomya eats 2 units of the 3rd pouch each day.
In this case, Tomya can eat all units of food.

**Example case 3.** Please note that here **L1** is larger than **U1**.
