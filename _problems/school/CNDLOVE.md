---
{"category_name":"school","problem_code":"CNDLOVE","problem_name":"Candy Love","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"3-04-2018","tags":{"0":"kr_abhinav"},"time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Sammy and Simmy love candies and frequently visit the local candy shop. Sammy and Simmy have bought $N$ candy packs. Packet $i$ contains $A_{i}$ candies. Sammy being the elder one is happy only if she has strictly more candies than Simmy. However Simmy, the more sensible one, is happy only if the difference between their number of candies is not more than $1$.

The shopkeeper, being a generous lady, agrees to help Sammy and Simmy by distributing the candies among them in a way that makes both of them happy. The shopkeeper can open the packs and distribute the candies even within a single pack to different people.

###Input:
- The first line will contain $T$, the number of testcases.
- The first line of every test case will contain $N$, the number of candy packs.
- The next line has $N$ integers, the $i_{th}$ integer denoting $A_{i}$, 
   the number of candies in the $i_{th}$ pack.

###Output:
Output "YES" if its possible for the shopkeeper to make both the sisters happy otherwise output "NO".  

###Constraints 
- $1 \leq T \leq 10^3$
- $1 \leq N \leq 10^3$
- $1 \leq A_{i} \leq 100$

###Sample Input:
1  
2  
5 2  

###Sample Output:
YES  
	
###EXPLANATION:
Sammy gets 4 candies from the first pack.

Simmy gets 1 candy from the first pack and 2 from the second one.

So in total, Sammy has 4, and Simmy has 3. Since Sammy has strictly more candies than Simmy, Sammy is happy. And since the difference is not more then 1, Simmy is also happy. Thus both of them are happy.
