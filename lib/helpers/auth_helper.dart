import 'dart:async';
import 'package:firebase_auth/firebase_auth.dart';

class AuthHelper {
  final FirebaseAuth _firebaseAuth = FirebaseAuth.instance;

  Future<String?> signIn(String email, String password) async {
    try {
      UserCredential result = await _firebaseAuth.signInWithEmailAndPassword(
          email: email, password: password);
      User? user = result.user;
      return user?.uid;
    } catch (e) {
      print('Error signing in: $e');
      return null;
    }
  }

  Future<String?> signUp(String email, String password) async {
    try {
      UserCredential result = await _firebaseAuth.createUserWithEmailAndPassword(
          email: email, password: password);
      User? user = result.user;
      return user?.uid;
    } catch (e) {
      print('Error signing up: $e');
      return null;
    }
  }

  Future<User?> getCurrentUser() async {
    User user = _firebaseAuth.currentUser!;
    return user;
  }

  Future<void> signOut() async {
    return _firebaseAuth.signOut();
  }
}
