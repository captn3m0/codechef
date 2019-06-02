---
languages_supported:
    - NA
title: COOKOFF2
category: NA
old_version: true
problem_code: COOKOFF2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef is planning a grand cooking tournament for aspiring chefs in the region. The competition progresses with a number of one-on-one elimination rounds until only one chef remains. For each round, two chefs are chosen at random for a cook-off. The loser of the cook-off is elimited, while the winner moves on. Additionally, each chef begins with a positive number of prize tokens (some chefs begin with more than others, based on their performance in a qualification round). The winner of each cook-off receives all of the loser's prize tokens, and the loser is awarded a prize based on the number of prize tokens he/she had accrued.

The final cook-off always receives the most publicity. Your task it to compute the expected difference between the number of prize tokens of the final two competitors before the final cook-off. You will be given the number of tokens each chef begins with.

### Input

Input begins with an integer T, the number of test cases (at most 50). Each test case consists of a single line, beginning with an integer C, the number of chefs in the competition, followed by C positive integers each describing the number of prize tokens a chef begins with. The total number of prize tokens among all chefs will be between 1 and 100, inclusive.

### Output

For each test case, output the expected difference in prize tokens, rounded to 6 places after the decimal point.

### Sample Input

<pre>3
3 1 1 1
3 1 1 2
4 10 10 10 30
</pre>
### Sample Output

<pre>1.000000
1.333333
26.666667
</pre>