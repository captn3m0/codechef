---
category_name: easy
problem_code: MAXCOMP
problem_name: 'Event Organizer'
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
problem_author: khadarbasha
problem_tester: anton_lunyov
date_added: 31-05-2012
tags:
    - khadarbasha
    - oct12
    - simple
editorial_url: 'http://discuss.codechef.com/problems/MAXCOMP'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1493558167
layout: problem
---
All submissions for this problem are available.Chef Po has given an online advertisement to provide **Event organizing services**. Chef got a huge response for his advertisement. He got various orders to conduct the events from different organizations. In turn, Chef will receive a compensation depend upon the type of event and the total numbers of persons in the event. Chef has received **N** orders for conducting events in this weekend in all. As weekend consists of two days all events will take place during the period of **48** hours. For the **i**-th order the corresponding event will start at **Si** hours, ends at **Ei** hours and Chef will receive a compensation **Ci** for this event. For example, if **Si = 17** and **Ei = 22** then duration of event is **22 – 17 = 5** hours and its time period is **17:00 – 22:00** of Saturday. Hours of Sunday are numbered by numbers from **24** to **48**. So, for example, **10:00** of Sunday will be represented as **10 + 24 = 34**. Because Chef is a newbie, the organizations had put a condition that Chef will receive a compensation for the event if and only if he is available for the entire duration of the event. It means that he can not choose overlapping events. Note, however, that if some event starts just in the moment another event has finished the Chef can safely conduct them both.

In general Chef will obey the orders on first come first serve basis. But on weekends Chef will select the orders in such a way that the total compensation for all the events he will conduct will be the maximal. Now your task is to help Chef and find this maximal total compensation.

### Input

The first line of the input contains an integer **T**, the number of test cases. **T** test cases follow. The first line of each test case contains an integer **N**, the number of received orders for conducting events. Each of the next **N** lines contains three space separated integers **Si**, **Ei**, **Ci**, the parameters of the **i**-th event described in the problem statement.

### Constraints

**1 ≤ T ≤ 10**
**1 ≤ N ≤ 2000**
**0 ≤ Si &lt; Ei ≤ 48**
**0 ≤ Ci ≤ 106**

### Output

Output for each test case should contain a single integer in a separate line, the maximal compensation Chef Po can get.

### Example

<pre>
<b>Input:</b>
2
4
1 2 100
2 3 200
3 4 1600
1 3 2100
3
1 10 2000
2 5 100
6 9 400

<b>Output:</b>
3700
2000
</pre>
### Explanation

**Case 1.** The best choice here is to conduct **3**rd and **4**th events. The total compensation is equal to **1600 + 2100 = 3700**. These events do not overlap since **3**rd event starts just after the finish of the **4**th one. Alternatively we can conduct first three events that also do not overlap. But in this case compensation will be only **100 + 200 + 1600 = 1900**.

**Case 2.** Note that first event overlaps with both second and third events, while the last two events do not overlap. Hence there are two reasonable choices available for Chef. One is to take just the first order with total compensation **2000** and the second one is to take the last two orders with total compensation **100 + 400 = 500**. Clearly the first choice is better. Hence the answer is **2000**.
