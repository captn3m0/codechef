---
languages_supported:
    - NA
title: FUNCTION
category: NA
old_version: true
problem_code: FUNCTION
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

One unavoidable problem with running a restaurant is that occasionally a menu item cannot be prepared. This can be caused by a variety of reasons such as missing ingredients or malfunctioning equipment.

There is an additional problem with such situations. A customer who has spent many minutes deciding between menu items can get quite annoyed when they place the order and the server tells them the item is not available. To mitigate this effect, the Chef declares that all servers must have what he calls a "backup function". This is a function f from menu items to menu items. For each menu item x, f(x) is an alternative menu item that the server may suggest to the customer in the event the customer requests menu item x when x is not available.

Of course, if a given item is not available then some other items make better suggestions than others. So, for some pairs of items x and y the Chef has determined a numeric value describing the effectiveness of the assignment f(x) = y. Higher values indicate the proposed substitute is similar to the original and lower values indicate the proposed substitute is not very similar to the original. Such effectiveness values are symmetric meaning that if the effectiveness of assignment f(x) = y is v, then the effectiveness of the assignment f(y) = x is also v.

You will be given a list of pairs of menu items. Each such pair will come with an associated effectiveness value. You are to compute a backup function f from these pairs. However, there is one additional constraint. For personal reasons, the Chef is opposed to using two items as backups for each other. Thus, for any two menu items x and y, it cannot be that f(x) = y and f(y) = x. Your goal is to compute a backup function of maximum possible quality. The quality of the backup function is simply defined as the sum of the effectiveness values of the assignments f(a) for each item a.

### Input

The first line contains a single integer T ≤ 30 indicating the number of test cases.

Each test case begins with two integers N and M where 3 ≤ N ≤ 10,000 and 3 ≤ M ≤ 50,000 where N is the number of items in the menu. The menu items will be numbered 1 through N.

M lines follow, each containing three integers a,b, and v. Here 1 ≤ a &lt; b ≤ N and |v| ≤ 100,000. Such a triple indicates that f(a) = b or f(b) = a (but not both) may be used in a backup function. Setting either f(a) = b or f(b) = a has effectiveness v. Each pair 1 ≤ a &lt; b ≤ N will occur at most once in the input.

Test cases will be separated by a single blank line (including a blank line preceding the first test case).

### Output

The output for each test case consists of a single line containing the maximum possible quality of a backup function f that does not assign any pair of items to each other. To be explicit, the assignment f(a) = b has effectiveness v where v is the value associated with the a,b pair in the input. Then the quality of a backup function is just the sum of the effectiveness values of the assignment for each item. If no backup function can be constructed from the given input pairs, then simply output "impossible" (note the lowercase 'i').

We may only assign f(a) = b or f(b) = a if a,b is an input pair. Furthermore, a backup function defines a single item f(a) for every item a between 1 and n. Note that f(a) = a is not valid since f(a) is supposed to be an alternative item if menu item a is not available (and all input pairs a,b have a &lt; b anyway). Finally, based on the Chef's additional constraint we cannot have a backup function with both f(a) = b and f(b) = a for any input pair a,b.

### Example

<pre><b>Input:</b>

3

3 3
1 2 1
2 3 2
1 3 3

6 7
1 2 0
1 3 0
1 4 0
2 3 0
2 4 0
3 4 0
5 6 0

4 6
1 2 1
1 3 -2
2 3 4
1 4 -8
2 4 16
3 4 -32

<b>Output:</b>

6
impossible
19
</pre>

 Note, one possible solution for the first test case is f(1) = 2, f(2) = 3, and f(3) = 1. The second is impossible since the only possiblity for f(5) is 6 and the only possiblity for f(6) is 5 and both cannot be used in a backup function. Finally, a possible solution for the last test case is f(1) = 2, f(2) = 3, f(3) = 1, and f(4) = 2.
