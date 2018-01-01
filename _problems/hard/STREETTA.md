---
category_name: hard
problem_code: STREETTA
problem_name: 'The Street '
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: null
date_added: 24-01-2014
tags:
    - march14
    - medium
    - segment
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/STREETTA'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493556853
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/STREETTA.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/STREETTA.pdf).

The String street is known as the busiest street in Codeland.
Tourists from all over the world want to visit the street once they are in Codeland.
The Chef owns **N** souvenir stores across the street (numbered from **1** to **N**).
At the beginning there is no souvenir in any store, the Chef has some plans to add some new items.
Each the Chef's plan is represented by 4 numbers: **u v a b** which mean an items with price **b**
is added to the store **u**, an items with price **a + b** is added to the store **u + 1** and so on.
More formally, an item with price **a \* i + b** is added to the store **u + i** for all (**0 ≤ i ≤ v - u**).

In additional to the cost of the item itself, the tourist must pay some conservation fees as well.
The Codeland regularly defines the new conservation fee. Each fee is represented by 4 numbers: **u v a b** which means
the tourist buying any item in the store **u + i** will be charged a fee of **i \* a + b** for all (**0 ≤ i ≤ v - u**).
In the case that several conservation fees have effect on the same store, the customer needs to pay all of those fees.

At some point of time, a tourist at store **i** asks you what is the **largest** amount of money they have to spend for
a souvenir at that store (the amount of money includes the price of one of the souvenirs and all the conservation fees for that store).

### Input

- The first line of the input contains two integers **N** and **M** represent the number of stores and the number of events
- Each of the next **M** lines represents an event of three types below in the chronological order. 
  - The new plan of the Chef: "1 **u v a b**".
  - The new conservation fee: "2 **u v a b**".
  - The query from tourist: "3 **i**".

### Output

For each query from tourist, print in one line the corresponding answer.
If there is no item at the **i**th store, print out "NA" (without quotes) as the answer.

### Constraints

- **1** ≤ **N** ≤ **109**
- **1** ≤ **M** ≤ **3\*105**
- For events of type 1: **1** ≤ **u** ≤ **v** ≤ **N**. **|a|, |b| ≤ 109**
- For events of type 2: **1** ≤ **u** ≤ **v** ≤ **N**. **|a|, |b| ≤ 104**
- For events of type 3: **1** ≤ **i** ≤ **N**

### Example

<pre><b>Input:</b>
10 10
3 5
1 3 8 3 1
3 5
1 5 10 -8 2
3 5
3 10
2 1 10 0 1
3 6
2 5 7 2 1
3 6

<b>Output:</b>
NA
7
7
-38
11
14

</pre>### Explanation
- At the beginning all stores are empty so the answer for the first query which asks about the store 5 is "NA".
- The first plan of the Chef is "3 8 3 1" which means the items with price 1, 4, 7, 10, 13, 16 are added to the stores 3, 4, 5, ..., 8 correspondingly. So in the next query (asking about store 5) the answer is 7 (we have only one item to buy with no conservation fee).
- The second plan of the Chef is "5 10 -8 2" so the items with price 2, -6, -14, -22, -30, -38 are added to the stores 5, 6, 7, ..., 10 correspondingly. Now the store 5 now contains two items with the corresponding prices are 7 and 2, the answer for the query about store 5 is still 7 (we still don't have any conservation fee). The store 10 contain only one item with price is -38 so the answer for the query about this store is -38.
- The first conservation fee policy is "1 10 0 1" which cause a conservation fee of 1 for each of 10 stores. The stores 6 contains 2 items, one costs 10 unit of money and the other costs -6. We need to pay 1 unit of money for the conservation fee so the largest amount of money we can spend for one item in store 6 is 10 + 1 = 11.
- The second conservation fee policy is "5 7 2 1" so a conservation fees of 1, 3, 5 are added to the stores 5, 6 and 7 correspondingly. Hence the largest amount of money we can spend for one item in store 6 is increased by 3. The answer for the last query is 14.

**Note:** Both of the price and the conservation fee can be negative.
