---
{"category_name":"school","problem_code":"T20MCH","problem_name":"Possible Victory","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/w0tbfPqC9GM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"25-03-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start2"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/T20MCH","time":{"view_start_date":1616938200,"submit_start_date":1616938200,"visible_start_date":1616938200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=T20MCH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is playing in a T20 cricket match. In a match, Team A plays for 20 overs. In a single over, the team gets to play 6 times, and in each of these 6 tries, they can score a maximum of 6 runs. After Team A's 20 overs are finished, Team B similarly plays for 20 overs and tries to get a higher total score than the first team. The team with the higher total score at the end wins the match.

Chef is in Team B. Team A has already played their 20 overs, and have gotten a score of $R$. Chef's Team B has started playing, and have already scored $C$ runs in the first $O$ overs. In the remaining $20 - O$ overs, find whether it is possible for Chef's Team B to get a score high enough to win the game. That is, can their final score be strictly larger than $R$?

###Input:
- There is a single line of input, with three integers, $R, O, C$. 

###Output:
Output in a single line, the answer, which should be "YES" if it's possible for Chef's Team B  to win the match and "NO" if not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $0 \leq C \leq R \leq 720$
- $1 \leq O \leq 19$
- $0 \leq C \leq 36 * O$

###Sample Input 1:
```
719 18 648
```	

###Sample Output 1:
```
YES
```
	
###Explanation:
In the remaining $20-O = 2$ overs, Team B gets to play $2*6 = 12$ times, and in each try, they can get a maximum of 6 score. Which means that the maximum score that they can acheieve in these 2 overs is $12*6 = 72$. Thus, the maximum total score that Team B can achieve is $C+72 = 720$. $720$ is strictly more than Team A's score of $719$, and hence Chef's Team B can win this match.

###Sample Input 2:
```
720 18 648
```	

###Sample Output 2:
```
NO
```
	
###Explanation:
Similar to the previous explanation, the maximum total score that Team B can achieve is $720$, which isn't strictly greater than Team A's $720$.Hence Chef's Team B can't win this match.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>