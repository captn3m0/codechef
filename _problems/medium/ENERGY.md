---
languages_supported:
    - NA
title: ENERGY
category: NA
old_version: true
problem_code: ENERGY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef is catering a dinner that will be followed by a dance. Unfortunately, the person in charge of organizing the dance has just become ill. The Chef still wants the dance to be successful since it is associated with the dinner he prepared. If the dance is not successful, then it may inadvertently leave a negative impression of the Chef's catering business on the guests.

The Chef has never organized a dance before and now he needs your help. The most complicated task the Chef has to undertake is the following. A dance is only successful if many people are on the dance floor. Thankfully, the guests are shy and are willing to be ordered to dance with other guests they like. The Chef knows which guests each person is willing to dance with and his goal is to have, at any moment in time, the maximum possible number of dancing pairs. A pair of guests will only dance if each is interested in dancing with the other.

To complicate matters, each guest may come and go at different parts of the dance. Specifically, each guest enters the dance only one time, stays for a non-zero length of time, and then leaves the dance and does not return. The Chef is only interested in maximizing the number of dancing pairs at any given moment in time. He is not concerned with repeatedly swapping people to new dance partners, so if a new person enters the dance then the Chef may break up many different dancing couples at this time and form new pairs to maximize the number of dancing pairs.

Say B is the total number of boys on the guest list and G is the total number of girls on the guest list. Your goal is the following. For each integer m between 0 and min(B,G), you should determine the total time that the maximum number of couples that the Chef can assign to the dance floor is m.

### Input

The first line contains a single positive integer T ≤ 30 describing the number of test cases. Each test case begins with three positive integers B, G, and L. B is the number of boys that will attend the dance and G is the number of girls. L indicates the length of the dance.

B lines then follow, each describing a boy. Each such line begins with three integers S,T,N where 0 ≤ S &lt; T ≤ L and 0 ≤ N ≤ G. Here, S is number of seconds after the dance starts that the boy enters and T is the number of seconds after the dance starts when the boy leaves. Then N distinct integers between 0 and G-1 follow on the same line that describe the girls that the boy is interested in dancing with.

Then G lines follow, each describe a girl in the same manner. The only difference is that 0 ≤ N ≤ B and the last N integers on a line corresponding to a girl are distinct integers between 0 and B-1 describing the boys that the girl is interested in dancing with.

Bounds: Both B and G are integers between 1 and 200 and L is an integer between 1 and 1,000,000,000.

### Output

You should output a single line for each test case consisting of min(G,B)+1 integers separated by a single space. Starting at index m = 0, the m'th such integer denotes the total time that the maximum number of dancing pairs that can be formed is m. Notice that the sum of the numbers on the output line should be exactly L.

Recall that a pair between a particular boy and a particular girl can only be formed at a given moment of time if both are present at that time and each is interested in dancing with the other.

### Example

<pre><b>Input:</b><br></br>4<br></br>2 3 10<br></br>0 10 2 0 1<br></br>1 6 3 0 2 1<br></br>4 5 2 0 1<br></br>3 8 1 1<br></br>2 8 1 0<br></br>3 3 20<br></br>0 12 3 0 1 2<br></br>1 13 3 0 1 2<br></br>2 14 3 0 1 2<br></br>3 15 3 0 1 2<br></br>4 16 3 0 1 2<br></br>5 17 3 0 1 2<br></br>4 3 40<br></br>0 17 3 0 1 3<br></br>5 34 2 2 3<br></br>21 40 3 0 1 2<br></br>1 35 2 3 1<br></br>0 27 2 0 3<br></br>11 40 4 0 1 2 3<br></br>5 29 3 0 2 1<br></br>1 1 10<br></br>0 5 1 0<br></br>5 10 1 0<br></br><br></br><b>Output:</b><br></br>7 2 1<br></br>9 2 2 7<br></br>0 16 18 6<br></br>10 0<br></br><br></br>
</pre>
### Test Case Annotation

For the first test case, we have:

From time 0 to 3, no pairs can be formed.

From time 3 to 4, one pair can be formed.

From time 4 to 5, two pairs can be formed.

From time 5 to 6, one pair can be formed.

From time 6 to 10, no pairs can be formed.

So, the total time with m = 0 is 7, the total time with m = 1 is 2, and the total time with m = 2 is 1.
