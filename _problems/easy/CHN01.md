---
category_name: easy
problem_code: CHN01
problem_name: 'Malvika conducts her own ACM-ICPC contest series'
languages_supported:
    - C
    - CPP14
    - JAVA
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 17-01-2016
tags:
    - acm15chn
    - admin2
    - binary
editorial_url: 'http://discuss.codechef.com/problems/CHN01'
time:
    view_start_date: 1453546800
    submit_start_date: 1453546800
    visible_start_date: 1453546800
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.After winning numerous programming competitions, Malvika has got bored of participating, and is thinking of holding her own series of contests, named "Advanced Contests by Malvika: India's Coolest Programming Contests (ACM-ICPC)". Each contest will have three problems, one each of easy, medium and hard levels.

Now, after some time, Malvika realized that creating hard problems for a contest is not as easy for her as solving them. So she asked her friend Animesh to join the team and help her with it. Animesh himself is no good with creating problems, but he suggested her a clever strategy to reduce the number of hard problems she needs to create. He suggested that ACM-ICPC could have three types of contests, comprising of the following problem levels:

- Type 1: 1 easy, 1 medium, 1 hard
- Type 2: 1 easy, 2 medium
- Type 3: 2 easy, 1 medium

One day, Malvika and Animesh sat down and prepared **e** easy problems, **m** medium, and **h** hard problems. As we know that it is harder to make higher difficulty problems, the number of hard problems will be no more than medium and similarly, the number of medium level problems, will be no more than easy level.

Now, they want to use the above problems to organizes a series of contests. Also, as they want the series to be interesting, so they don't want to have two consecutive contests in the series to be of the same type.

Can you please help them in finding out the maximum number of contests they can conduct in the series?

### Input

- The first line of input contains a single integer **T** denoting the number of test cases.
- The only line of each test case contains three space separated integers — **e, m, h** — as defined in the statement.

### Output

- For each test case, output a single integer in a line, the answer to the problem.

### Constraints

- 1 ≤ **T** ≤ **105**
- 0 ≤ **e, m, h** ≤ **105**
- **h** ≤ **m** ≤ **e**
- Sum of variables **e** for all the test cases won't exceed **107**.

### Example

```
<b>Input:</b>
2
1 1 1
4 4 1

<b>Output:</b>
1
3

```
### Explanation

**In the first example**, they have 1 easy, 1 medium and 1 hard problem. They can conduct one contest of type 1. This is the maximum number of contests they can conduct.

**In the second example**, they have 4 easy, 4 medium, and 4 hard problems. They can conduct 3 contests, one each of type 1, 2, and 3, which require a total of 4 easy, 4 med and 1 hard problems. This is the maximum number of contests they can conduct. Hence, the answer is 3.