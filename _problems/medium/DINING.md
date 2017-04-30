---
category_name: medium
problem_code: DINING
problem_name: Dining
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
problem_author: xcwgf666
problem_tester: null
date_added: 13-05-2015
tags:
    - graphs
    - min
    - snck151a
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/DINING'
time:
    view_start_date: 1432379700
    submit_start_date: 1432379700
    visible_start_date: 1432379700
    end_date: 1735669800
    current: 1493557625
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151A/mandarin/DINING.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151A/russian/DINING.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151A/vietnamese/DINING.pdf)

Sergey is visiting ChefTown - a town famous for its' restaurants with famous ChefLand's cuisine. Among the most recommended things to do in ChefTown is to taste ChefLand's all **N** national dishes. Sergey has decided to do it, but as the person who is fond of planning everything, he needs to plan his restaurants' visit's in advance.

He knows that he will stay in ChefTown for **D** days and each day he'll have a dinner in one of ChefTown's restaurants. It is always hard to say, whether a particular dish will appear in the restaurant on some particular day. But based on the internet reviews, he concluded that the probability that the **i**-th dish will appear in the restaurant he's going to visit on the **j**-th day is **Ai, j**.

On the other hand, everything is even more complicated. Sergey is a thin guy and thus unable to eat more than **K** dishes in a single day. That doesn't mean that he has to eat **K** dishes every day, but if he won't eat any dish at all during some day, he'll go to sleep hungry and displeased, so he wants to avoid such situations. Because of hard financial situation, he will have food only in restaurants and wants to taste all the dishes **exactly once**.

Now, in order to process all this information, Sergey asks you to help him. Please make a plan for him such that:

- In the plan, he will taste every dish exactly once.
- During any day, he will eat at least one dish, but no more than **K** dishes in total. Here we mean, that he will _plan_ to eat no more than **K** dishes (and at least one dish), but note that he might fail in this because of unavailability of some dishes on a particular day.
- The total probability that all the dishes will be available on their planned days of eating is maximal.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains single space-separated integers **N**, **D** and **K** denoting the number of dishes that Sergey wants to taste, the number of days he'll stay in ChefTown and the maximum number of dishes he can eat during a single day respectively.

The following **N** lines will contain **D** space-separated real numbers each, where the **j**-th real number in the **i**-th line denotes the probability that the dish numbered **i**-th will be available in the restaurant that he will visit during the **j**-th day.

### Output

For each test case, output two lines.

- The first line should contain maximal possible probability of eating all the dishes. Your answer will be considered as correct if it has an absolute error less than **1e−6** (ie. **10-6**).
- The second line should contain **N** space-separated integers, describing the plan. The **i**-th integer should describe the 1-indexed number of day, during which the **i**-th dish will be eaten. If there are more than one such possible plans, you can print any one of them.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **50**
- **1** ≤ **D, K** ≤ **N**
- **D\*K** ≥ **N**
- **0.750** ≤ **Ai, j** ≤ **1.000**
- The probabilities will be given with no more than **3** digits after the decimal point.

### Example

```
<b>Input:</b>
1
3 3 1
1.0 1.0 0.8
0.8 1.0 1.0
0.8 0.8 0.8

<b>Output:</b>
0.8
1 2 3

```
### Explanation

**Example case 1.**On the first day, Sergey will eat the first dish. On the second day, he'll eat the second dish. On the third day, he'll try eat the third dish that will appear with the probability of **0.8**. The total probability of dishes being available on these days is 0.8. It is impossible to achieve the better result.