---
{"category_name":"easy","problem_code":"ELOMAX","problem_name":"Ratings and Rankings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 3\r\n2500 2500 2520\r\n10 -5 -20\r\n10 15 20\r\n-15 17 13\r\n2 3\r\n2125 2098\r\n-20 10 -10\r\n10 10 -20","output":"2\r\n2","explanation":"**Test case 1:**\r\n- The ratings for player $1$ after each month are: $(2510$, $2505$ and $2485)$, while his rankings are **first**, **third** and **third**, respectively. Thus, his best rating and best ranking occur after the same month, i.e., after the first month.\r\n\r\n- The ratings for player $2$ after each month are: $(2510$, $2525$ and $2545)$, while his rankings are **first**, **first** and **first**, respectively. His best rating occurs after the third month, while his best ranking occurs after the first month (we consider the first month even though his peak ranking is over all the months, because we consider only the earliest month where he attains the peak ranking).\r\n\r\n- The ratings for player $3$ after each month are: $(2505$, $2522$ and $2535)$, while his rankings are **third**, **second** and **second**, respectively. His best rating occurs after the third month, while his best ranking occurs after the second month.\r\n\r\nSo there are two players ($2$ and $3$), whose peak ratings did not occur in the same month as their peak ranking, and hence the answer is 2.\r\n\r\n**Test case 2:**\r\n- The ratings for player $1$ after each month are: $(2105$, $2115$ and $2105)$, while his rankings are **second**, **second** and **first**, respectively. Best rating is after second month, but best ranking is after third month.\r\n\r\n- The ratings for player $2$ after each month are: $(2108$, $2118$ and $2098)$, while his rankings are **first**, **first** and **second**, respectively. Best rating is after second month, but best ranking is after first month.\r\n\r\nSo there are two players ($1$ and $2$), whose peak ratings did not occur in the same month as their peak ranking, and hence the answer is 2.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/sGEkwJRG7Qg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"29-08-2020","tags":{"0":"ad","1":"akash_adm","2":"akashbhalotia","3":"ltime87","4":"psychik","5":"simple","6":"sorting"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/ELOMAX","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ELOMAX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/ELOMAX.pdf).

Chef organised a chess tournament, which spanned over $M$ months. There were $N$ players, and player $i$ was rated $R_i$ before the start of the tournament. To see the progress of the players, he noted their rating changes at the end of each month.

After the tournament, FIDE asked Chef to find the number of players whose peak rating and peak ranking did not occur in the same month. In other words, Chef was asked to find the ratings and ranking of each player after each of the $M$ months. Then, using this data, he should find the number of players, such that the month in which they achieved their highest rating over all the months, was different from the month in which they achieved their best rank (based on ratings), over all the months. Note that we do not consider the initial rating/ranking, but only the rating and rankings after each of the $M$ months. 

For a particular player, if there are multiple peak rating or peak ranking months, Chef was to consider the earliest of them. If multiple players had the same rating at the end of some month, they were to be given the same rank. For example, if there were $5$ players, and their ratings at the end of some month were $(2600$, $2590$, $2600$, $2600$ and $2590)$, players $1$, $3$ and $4$ were to be given the **first** rank, while players $2$ and $5$ should be given the **fourth** rank.

As Chef hates statistics, he asks you, his friend, to help him find this. Can you help Chef?

###Input:

- The first line contains an integer $T$, the number of test cases.
- The first line of each test case contains two space-separated integers $N$ and $M$, the number of players and the number of months that the tournament spanned over.
- The second line of each test case contains $N$ space-separated integers, $R_1, R_2, \ldots, R_N$ denoting the initial ratings of the players, i.e., their ratings before the start of the tournament.
- The next $N$ lines each contain $M$ space-separated integers. The $j^{th}$ integer of the $i^{th}$ line, $C_{i,j}$ denotes the rating change of the $i^{th}$ player after the $j^{th}$ month.

###Output:
For each test case, print the number of players whose peak ratings did not occur in the same month as their peak ranking, in a new line.

###Constraints 
- $1 \le T \le 10$
- $1 \le N,M \le 500$
- $1800 \le R_i \le 2800$
- $-20 \le C_{i,j} \le 20$

###Subtasks
- 30 points : $1 \leq N,M \leq 50$
- 70 points : Original constraints.

###Sample Input:
```
2
3 3
2500 2500 2520
10 -5 -20
10 15 20
-15 17 13
2 3
2125 2098
-20 10 -10
10 10 -20
```
###Sample Output:
```
2
2
```
###Explanation:
**Test case 1:**
- The ratings for player $1$ after each month are: $(2510$, $2505$ and $2485)$, while his rankings are **first**, **third** and **third**, respectively. Thus, his best rating and best ranking occur after the same month, i.e., after the first month.

- The ratings for player $2$ after each month are: $(2510$, $2525$ and $2545)$, while his rankings are **first**, **first** and **first**, respectively. His best rating occurs after the third month, while his best ranking occurs after the first month (we consider the first month even though his peak ranking is over all the months, because we consider only the earliest month where he attains the peak ranking).

- The ratings for player $3$ after each month are: $(2505$, $2522$ and $2535)$, while his rankings are **third**, **second** and **second**, respectively. His best rating occurs after the third month, while his best ranking occurs after the second month.

So there are two players ($2$ and $3$), whose peak ratings did not occur in the same month as their peak ranking, and hence the answer is 2.

**Test case 2:**
- The ratings for player $1$ after each month are: $(2105$, $2115$ and $2105)$, while his rankings are **second**, **second** and **first**, respectively. Best rating is after second month, but best ranking is after third month.

- The ratings for player $2$ after each month are: $(2108$, $2118$ and $2098)$, while his rankings are **first**, **first** and **second**, respectively. Best rating is after second month, but best ranking is after first month.

So there are two players ($1$ and $2$), whose peak ratings did not occur in the same month as their peak ranking, and hence the answer is 2.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>