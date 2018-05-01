---
languages_supported:
    - NA
title: CHIEFETT
category: NA
old_version: true
problem_code: CHIEFETT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef's girlfriend, Chief, is displeased with him. This is not a good sign for their relationship, and as always, he has turned to you for help. He looks forward to take his girlfriend to shopping; offering her to buy 'K' gifts. The shop that he is taking her to has 'N' unique items, that is, there is single quantity of each item (its a very special shop, you see!).

Chef has with him, K discount coupons that he wishes to use. The shop's policy only allows Chef to use one discount coupon on any one purchased item. That is why Chef is letting Chief buy K gifts; he intends to use each coupon with him.

Chef of course cannot stop Chief from buying whatever she likes. Chief would select any K gifts, from among the N items that the shop has. She makes selection of any K out of N items, uniformly. Suppose, there are 5 items and Chef lets Chief buy 3, then she selects any of the 3 out of 5 items with the probability 1/10.

After Chief selects the items she wishes to buy, Chef will have to pay the bill. Smart as he is, he would apply the K discount coupons on the K items (one on each) such that the discount he receives is as large as possible.

Chef wants to prepare himself for this day. He knows beforehand the price of each item in the shop. Can you tell him what expected discount can he expect? You have to tell him the expected discount in the amount of money he can expect to save.

**Input format**

The first line contains the number T, the number of test cases. In the following lines, T test cases follow (without any newlines between them.) Each case consists of only 3 lines. The first line of each test case contains N and K, separated by a single space. The second line contains N positive integers, the prices of the N items respectively, separated by a single space. The third line contains K positive integers (between 1 and 100, inclusive) separated by a single space. They represent the percentage of discount offered by the coupons, that Chef has, respectively.

**Output format**

For each test case, print the expected amount of money Chef should expect to save. Output the result rounded to 3 digits after the decimal.

**Constraints**

1 ≤ T ≤ 50
 1 ≤ N ≤ 1000
 1 ≤ K ≤ N
 1 ≤ prices ≤ 10000

**Sample input**

<pre>2
3 2
100 200 300
10 20
4 3
100 200 300 400
10 20 30

</pre>**Sample output**

<pre>66.667
175.000

</pre>**Explanation**

In the second case, Chief can make the following selections:

- (100, 200, 300), with probability 1/4. Chef can apply the coupons to at best save 140.
- (100, 200, 400), with probability 1/4. Chef can apply the coupons to at best save 170.
- (100, 300, 400), with probability 1/4. Chef can apply the coupons to at best save 190.
- (200, 300, 400), with probability 1/4. Chef can apply the coupons to at best save 200.

Thus Chef can save an expected (140 + 170 + 190 + 200) / 4 = 175.000
