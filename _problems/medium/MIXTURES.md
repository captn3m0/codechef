---
languages_supported:
    - NA
title: MIXTURES
category: NA
old_version: true
problem_code: MIXTURES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Harry Potter has n mixtures in front of him, arranged in a row. Each mixture has one of 100 different colors (colors have numbers from 0 to 99).

He wants to mix all these mixtures together. At each step, he is going to take two mixtures that stand next to each other and mix them together, and put the resulting mixture in their place.

When mixing two mixtures of colors a and b, the resulting mixture will have the color (a+b) mod 100.

Also, there will be some smoke in the process. The amount of smoke generated when mixing two mixtures of colors a and b is a\*b.

Find out what is the minimum amount of smoke that Harry can get when mixing all the mixtures together.

### Input

There will be a number of test cases in the input.

The first line of each test case will contain n, the number of mixtures, 1 <= n <= 100.

The second line will contain n integers between 0 and 99 - the initial colors of the mixtures.

### Output

For each test case, output the minimum amount of smoke.

### Example

<pre><b>Input:</b>
2
18 19
3
40 60 20

<b>Output:</b>
342
2400

</pre>In the second test case, there are two possibilities:
- first mix 40 and 60 (smoke: 2400), getting 0, then mix 0 and 20 (smoke: 0); total amount of smoke is 2400
- first mix 60 and 20 (smoke: 1200), getting 80, then mix 40 and 80 (smoke: 3200); total amount of smoke is 4400

The first scenario is the correct approach since it minimizes the amount of smoke produced.
