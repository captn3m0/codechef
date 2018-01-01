---
category_name: easy
problem_code: CHINFL
problem_name: 'Chef and Inflation'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: antoniuk1
date_added: 23-02-2015
tags:
    - dynamic
    - jan16
    - medium
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/CHINFL'
time:
    view_start_date: 1452504600
    submit_start_date: 1452504600
    visible_start_date: 1452504600
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN16/mandarin/CHINFL.pdf), [Russian](http://www.codechef.com/download/translated/JAN16/russian/CHINFL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN16/vietnamese/CHINFL.pdf) as well.

A recent glut in Chefland's markets has caused the local currency _Peppercorn_ to devaluate sharply. (Peppercorns are getting cheaper on an average, though there could be ups and downs).

And Chef needs to rescue his wealth! Initially, he had **D** Peppercorns. There are **N** exchange kiosks in the city he lives in, where he can go and exchange his Peppercorns for a well-known stable currency, the Antarctican Dollar. For each kiosk, the exchange rate for the first **M** seconds of the day is known (both for buying and selling). All kiosks are arranged in a row, and to travel from the **ith** to the **jth** kiosk, you need to spend **|i-j|** seconds, and to exchange currency at any kiosk, you also need **1** second. So, starting at point of time  at any of the kiosks (he can get there before trading starts for the day), Chef runs from one kiosk to another to buy and sell currency. You need to find the maximum amount of Peppercorns Chef could have after the **Mth** second.

### Note

- If **X** is a buying rate, the kiosk will pay you **X** Peppercorns for **1** Antarctican Dollar.
- If **X** is a selling rate, you will pay the kiosk **X** Peppercorns for **1** Antarctican Dollar.

### Input

First line of input contains three numbers — **N**, **M** and **D**. **N** lines follow. **i**th line (**i = 0 … N-1**) contains **2\*M** integers — currency rate for **ith** kiosk. Numbers **Ai, 2j** and **Ai, 2j+1** (**j = 0 … M-1**) are the selling and buying rates, respectively, at the **jth** second for the **ith** kiosk.

### Output

Output a single number: the maximum amount of money (in Peppercorns - in the end Chef ought to have all the money converted to local currency since it's the only valid currency in the country for financial operations) he could have after **M** seconds, with absolute or relative error not more than **1e-6**.

If the amount of money of any currency that Chef will own at any point of time exceeds **1018**, output file should contain **only a single line** containing the string _“Quintillionnaire”_ (without quotes, followed by a newline character).

### Constraints

- **1** ≤ **D** ≤ **1018**
- **1** ≤ **N, M** ≤ **103**
- **1** ≤ **Ai, j** ≤ **109**
- **Ai, 2j** > **Ai, 2j+1** (because there are no miracles in Chefland — you’ll always pay more than what the kiosk will pay you. Otherwise, one could’ve indefinitely sold and bought and increased their money this way).

### Subtasks

**Subtask 1 (20 points):** - **1 ≤ N ≤ 100**
- **1 ≤ M ≤ 100**
- **1 ≤ D ≤ 103**
- **1 ≤ Ai,j ≤ 103**

 **Subtask 2 (30 points):**- **1 ≤ N ≤ 100**
- **1 ≤ M ≤ 100**

 **Subtask 3 (50 points):** No additional constraints ### Example

<pre><b>Input:</b>
3 3 5
2 1 5 3 7 6
2 1 4 3 6 5
10 9 8 7 6 5

<b>Output:</b>
15.0000000000

</pre>