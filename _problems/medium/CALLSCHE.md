---
category_name: medium
problem_code: CALLSCHE
problem_name: 'Call Center Schedule'
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
problem_author: cenadar
problem_tester: iscsi
date_added: 19-12-2015
tags:
    - cenadar
    - feb16
    - graph
    - maxflow
    - medium
    - minimum
editorial_url: 'http://discuss.codechef.com/problems/CALLSCHE'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493557499
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/CALLSCHE.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/CALLSCHE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/CALLSCHE.pdf) as well.

Chef is working as a manager of a call center. He has a large number of empoyees in his team. Each of them spends their time participating in meetings, talking to clients over the phone, and a few other activities related to the job.

Each person can spend an hour either in a meeting, talking to clients, or working on their project. Each hour must be dedicated to only one activity and in a single hour, a person cannot switch activities.

There are **D** business days in the week, numbered **1** to **D**. Person **i** can spend at most **Li** hours per week talking to clients. For each person, it is known which hours in their schedule are taken up by meetings.

The call center responds to client for **H** hours per day, which, for simplicity, are numbered **1** through **H**.

For each hour in the week, the number of clients connecting to the call center for that hour is known. So, Chef knows that he needs exactly **Ri,j** people talking with clients during the day **i** and hour **j**.

**Fk, i, j** is equal to **1** if person **k** is available to talk to clients during hour **j** of day **i** and 0 if they have a meeting during that time.

Please note that Chef lives in an alien world, which may not have 24 hours in a day or 7 days in a week.

Chef needs to create a schedule for each person. Remember that there is a lunch period every day, from **LTbegin** to **LTend** hours, both inclusive , so please make sure that each person will have at least one hour of free time during the designated lunch period.

If some person doesn't have a meeting during an hour and they don't talk to a client as well during that hour, they can work on a corporate project and this hour will count as a working hour. Alternatively, they may spend this time working on a personal project and it will not count as a working hour.

Please help Chef find out if it is possible to create a schedule such that following conditions hold.

- Each person spends at most **N** hours per day being on meetings and speaking with clients.
- Each person spends at most **Li** hours per week talking to clients.
- Each person has at least one hour during the lunch time free of client calls as well as meetings.
- For each hour **j** on the day **i**, there are exactly **Ri,j** people free to talk to clients.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case input contains four space-separated integers — **P**, **D**, **H** and **N** — denoting the number of people in the team, number of working days in a week, number of hours the call center works in a day, and the number of working hours per day for people respectively.

The next line contains **P** space-separated integers, where the **ith** integer denotes **Li**.

The next line contains two space-separated integers **LTbegin** and **LTend**. The first integer denotes the first hour of the designate lunch period, and the second denotes its last hour.

Next **D** lines contain **H** space-separated integers each. The **jth** integer of line **i** denotes **Ri,j**.

Next **P** blocks of lines will contain **D** lines each, with a line containing **H** space-separated integers. The **jth** integer of line **i** of block **k** denotes **Fk,i,j**.

### Output

For each test case in a single line output **"Yes"** (without quotes) if it's possible to create a schedule and **"No"** (without quotes) otherwise.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **H** ≤ **MAX**
- **1** ≤ **D** ≤ **MAX**
- **1** ≤ **P** ≤ **MAX**
- **1** ≤ **Li** ≤ **N\*D**
- 0 ≤ **Ri,j** ≤ **15**
- 0 ≤ **Fk,i,j** ≤ **1**
- **1** ≤ **LTbegin, LTend** ≤ **N**

### Subtasks

- **Subtask #1 \[15 points\]: MAX = 3**
- **Subtask #2 \[25 points\]: MAX = 10**
- **Subtask #3 \[60 points\]: MAX = 70**

### Example

<pre><b>Input:</b>
2
2 2 3 2
4 1
2 3
0 1 1
0 1 0
1 1 1
1 1 1
1 1 1
1 0 1
2 2 3 2
4 1
2 3
0 1 2
0 1 0
1 1 1
1 1 1
1 1 1
1 0 1

<b>Output:</b>
Yes
No
</pre>