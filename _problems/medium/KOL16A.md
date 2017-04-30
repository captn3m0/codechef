---
category_name: medium
problem_code: KOL16A
problem_name: 'Playing World War II'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kol_adm
problem_tester: null
date_added: 21-12-2016
tags:
    - kol_adm
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493557921
layout: problem
---
All submissions for this problem are available.Enigma: The military machine used by Nazi Germany to encipher messages before and during World War II. The code of Enigma was broken once by Polish Cipher Bureau in 1932 and then again, during the war, by the Codebreaker team at Bletchley Park, England. Because of this, the Allied Powers were able to intercept a lot of messages transferred by German military and knew their battle plans. It is said that, breaking of Enigma shortened the length of that war by two years.

But, in the time of war, Allies were gravely concerned about the possibility of Germans finding out this security breach and resetting their communication system. They were very disciplined about using the information in order to hide this source of intelligence. Their precautions included leading fake invasions, superfluous search missions and attacking only after creating a proper cover story. Even at times, they considered sabotaging own resources during a battle which resulted in the death toll of hundreds of soldiers, civilians and massive loss on supplies; just to avoid any suspicion!

It seems like they played with probabilities leaving peoples’ lives hanging on the decision.

Cruel, wasn’t it? Can you do it?

There are **N** battles ahead. The probability that Allies will win the ith battle is **Pi**.

The enemies are calculating a value **PEB (Probability that Enigma has been broken)**. If the allies win a battle, the value of PEB increases; if the enemy wins the battle, the value decreases. If the value of PEB gets too high, the enemy will become suspicious and replace Enigma with something else.

**PEB** is calculated as an average from results of all previous battles using the following method.

```

total := 0
foreach Battle, b<sub>i</sub>
	if Allies win
		total += probability of Allies losing in b<sub>i</sub>
	else
		total -= probability of Allies winning in b<sub>i</sub>
PEB = max(total / no. of battles, 0)

```
As the Allies already deciphered Enigma, they can choose to win or lose any battle they want. Consider the following scenario as example:

![](https://www.codechef.com/download/upload/ACM16KOL/A.png)
Some battles are more important than others; the ith battle has an Impact Factor **Fi**. As a war analyst, your job is to maximize the sum of Impact Factors of all the battles won. But the enemies must not know that Allies have deciphered Enigma, so you must keep PEB less than a certain **threshold, S**; throughout the whole war.

### Input

- The first line of input contains an integer **T (1 ≤ T ≤ 100)** denoting the number of test cases. Each test case contains 4 lines:
- The first line contains one integer **N (1 ≤ N ≤ 100)** denoting the number of battles.
- The second line contains **N** space-separated real numbers **P1,P2,....,Pn** (probability of the Allies winning in ith battle) **0.00 ≤ Pi ≤ 1.00**.
- The third line contains **N** space-separated integers **F1,F2,...,Fn** (Impact factor of the ith battle). Here **1 ≤ Fi ≤ 10000**
- The fourth line contains a real number denoting threshold, **S (0.00 .**

The real numbers contain at most 2 digits after the decimal point.

### Output

For each test case, print case number and the maximum sum of impact factors.

### Sample 

```
<b>Input</b>     

2
2
0.8 0.9
100 200
1
4
0.28 0.62 0.92 0.96
3 8 7 2
0.05

<b>Output</b>
Case 1: 300
Case 2: 9

```