---
{"category_name":"easy","problem_code":"ENG5","problem_name":"Ross goes for Shopping","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"aditya10_","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"aditya10_","1":"aditya10_","2":"bitmasking","3":"medium","4":"pelt2019"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>The Big Billion day has arrived and Ross has $N$  items in his mind which he wants to purchase. 

After purchasing Ross found that he has total of $M$ type items from 1 to $M$. 

Now to distinguish the items from each other he wants to arrange them in such a way that items of same type occur continuously. 

For this he can select any $K$ ( $0$ <= $K$ <= $N$ ) number of items and permute them. The other $N-K$ elements remain untouched. 

Can you help him to find the minimum value of $K$ for which this is possible? 

###Input:

- The first line of the input contains two space separated integer $N$ and $M$
- The second line contains N space-separated integers which denotes the type of items he has bought as 
  $A_1$, $A_2$, . . . . . $A_N$ . 

###Output:

Print a single line containing one integer —  minimum value of $K$ for which items of same type occurs continuously. 

###Constraints 
- $1 \leq N \leq 100000$
- $1 \leq M \leq 20$
- $1 \leq A_i \leq M$

###Sample Input:
	6 3
	1 2 3 1 2 3

###Sample Output:
	3
	
###EXPLANATION:
One of the possible way is to select the items at indexes $1st$ , $3rd$ and $5th$.
We can permute the selected items by placing the $1st$ ,$3rd$ and $5th$ items at $3rd$ ,$5th$ and $1st$ places respectively to finally get 2 2 1 1 3 3. 