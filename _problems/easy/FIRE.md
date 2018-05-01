---
languages_supported:
    - NA
title: FIRE
category: NA
old_version: true
problem_code: FIRE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Help! A brush fire has started near your house and you are the only one who can help extinguish it. The only tool you have at your disposal is a single fireproof barrier that can protect one bush at a time, provided the bush has not yet caught fire already. For simplicity, we will assume the flames spread according to the following discrete time model.

Initially, a single bush, say _s_, is on fire. You choose a bush, say _k_, to save. The flames then leap from _s_ to every bush near _s_ with the exception of bush _k_ if it was near _s_. Say these new burning bushes form a set _B_. Bush _s_ is then reduced to ashes and will never burn again. Now that the bushes in _B_ are on fire, you may move the protective barrier from bush _k_ to some other bush _k'_. The flames leap from bushes in _B_ to every bush that has not yet burned (_i.e._ not _s_ or in _B_) and is close enough to some bush in _B_ except, perhaps, bush _k'_. Say this new set of burning bushes is _B'_. The bushes in set _B_ are reduced to ashes and will never burn again. Now, you may move the protective barrier from _k'_ to another bush to protect it from the flames that will spread from bushes in _B'_ and so on. This process repeats until there are no more bushes on fire.

The bushes are arranged in a peculiar manner. Before the fire started, each bush was close enough to spread a fire to at most three other bushes. Moreover, the bush that was initially on fire is actually close enough to only at most two other bushes. It is understood that for any two bushes A and B, if bush A is close enough to bush B then bush B is also close enough to bush A. Finally, the graph underlying the "close enough" relation has no cycles.

For whatever reason, some of the bushes hold some sentimental value to you. For this reason, you want to save all of these bushes.

### Input

The first line of the input contains a single integer T ≤ 40 indicating the number of test cases that will follow. Each test case begins with three integers _n_, _s_, and _t_ satisfying 1 ≤ _n_ ≤ 10,000 and both _s_ and _t_ are between 1 and _n_. Here, _n_ is the number of bushes (indexed from 1 to _n_), _s_ is the index of the bush that is initially on fire, and _t_ is the number of bushes you want to save.

Following this, there are _n_ lines describing the "close enough" relation. The _i_'th line starts with an integer 0 ≤ _ci_ ≤ 3 meaning bush _i_ is close enough to _ci_ other bushes. The remaining _ci_ integers on this line are the indices of the bushes that bush _i_ is close to. As mentioned earlier, the input will be such that if bush _i_ is close enough to bush _j_, then bush _j_ is also close enough to bush _i_. Finally, we also guarantee that _cs_ ≤ 2.

The last line of input for each test case consists of _t_ distinct integers between 1 and _n_. These correspond to indices of bushes you want to save.

Test cases are separated by a single blank line (including a blank line preceding the first test case).

### Output

For each test case, you are to output a single line consisting of either "yes" or "no", depending on whether or not it is possible to save all of the indicated bushes.

### Example

<pre>
<b>Input:</b>

3

3 1 2
2 2 3
1 1
1 1
2 3

3 1 1
2 2 3
1 1
1 1
2

7 1 3
2 2 3
3 1 4 5
3 1 6 7
1 2
1 2
1 3
1 3
4 5 7

<b>Output:</b>

no
yes
yes
</pre>