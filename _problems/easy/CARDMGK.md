---
{"category_name":"easy","problem_code":"CARDMGK","problem_name":"Chef and Card Trick","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"18-10-2018","tags":{"0":"easy","1":"kingofnumbers","2":"observations","3":"prefix","4":"snck1a19","5":"sorting","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CARDMGK","time":{"view_start_date":1540092600,"submit_start_date":1540092600,"visible_start_date":1540092600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S191ATST/hindi/CARDMGK.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191ATST/mandarin/CARDMGK.pdf), [Russian](http://www.codechef.com/download/translated/S191ATST/russian/CARDMGK.pdf), [Vietnamese](http://www.codechef.com/download/translated/S191ATST/vietnamese/CARDMGK.pdf) and [Bengali](http://www.codechef.com/download/translated/S191ATST/bengali/CARDMGK.pdf) as well.

Chef is recently learning magic tricks that use a deck of cards. Each card in this deck has an integer written on it. Currently, he is learning how to make the deck sorted in non-decreasing order (from top to bottom) of the numbers on the cards using at most one shuffle move.

A shuffle move means taking an arbitrary number of cards from the top of the deck and putting them at the bottom of the deck in the same relative order.

For example, if we have a deck of cards with numbers $(5, 7, 3, 3, 8, 2)$, it is allowed to take the top three cards $(5, 7, 3)$ and put them at the bottom; the result is $(3, 8, 2, 5, 7, 3)$.

You are trying to convince Chef that sometimes, it is impossible to sort the deck in non-decreasing order using at most one shuffle move. That is why you need to write a program that determines if it is possible to sort a given deck or not.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$ denoting the cards in the deck from top to bottom.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to sort the deck or `"NO"` if it is impossible.

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^6$
- $1 \le A_i \le 10^9$ for each valid $i$

###Subtasks
**Subtask #1 (50 points):**
- $2 \le N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points):** original constraints 

### Example Input
```
2
5
1 5 2 4 3
5
3 4 5 1 2
```
### Example Output
```
NO
YES
```