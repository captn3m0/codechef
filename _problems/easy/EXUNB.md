---
{"category_name":"easy","problem_code":"EXUNB","problem_name":"Tennis Tournament","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":null,"date_added":"25-09-2019","tags":{"0":"constructive","1":"easy","2":"expp2019","3":"shashwatchandr"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXUNB","time":{"view_start_date":1571142600,"submit_start_date":1571142600,"visible_start_date":1571142600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXUNB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A tennis tournament is about to take place with $N$ players participating in it.
Every player plays with every other player exactly once and there are no ties. That is, every match has a winner and a loser. 

With Naman's birthday approaching, he wants to make sure that each player wins the same number of matches so that nobody gets disheartened.  

Your task is to determine if such a scenario can take place and if yes find one such scenario.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single integer $N$ denoting number of players.

###Output:
- If it's impossible for everyone to win the same number of matches, print "NO" (without quotes).
- Otherwise print "YES" (without quotes) and then print $N$ lines , each line should consist of a string containing only 0s and 1s and should be of size $N$. 
- If the jth character in the ith line is 1 then it means in the match between $i$ and $j$ , $i$ wins. 
- You will get a WA if the output does not correspond to a valid tournament, or if the constraints are not satisfied.
- You will get also WA verdict if any 2 lines have contradicting results or if a player beats himself.

###Constraints 
- $1 \leq T \leq 100$
- $2 \leq N \leq 100$

###Subtasks
- 10 points : $2 \leq N \leq 6$
- 90 points :  Original Constraints. 

###Sample Input:
```
2
3
2
```

###Sample Output:
```
YES
010
001
100
NO
```

###Explanation:
One such scenario for $N$ = $3$ is when player $1$ beats player $2$, player $2$ to beats player $3$ and player $3$ beats player $1$. Here all players win exactly $1$ match. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>